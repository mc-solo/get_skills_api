<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{

    /**
     * Initiate a transaction from a user request and return 
     * the transaction details. Then send the same fuckin request to chapa
     * just after saving the details.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handlePayment(Request $request)
    {
        // validate the request data
        $transactionData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
            'user_id' => 'required|exists:users,id',
        ]);

        // add additional fields
        $transactionData['tx_ref'] = 'negade-' . uniqid(); // generate a unique transaction reference
        $transactionData['currency'] = 'ETB';
        $transactionData['status'] = 'pending';

        // dd($transactionData);
        try {
            // create the transaction
            $transaction = Transaction::create($transactionData);

            // prepare request payload for chapa

            $chapaData = [
                'public_key' => env('CHAPA_PUBLIC_KEY'),
                'tx_ref' => $transaction->tx_ref,
                'amount' => $transaction->amount,
                'currency' => $transaction->currency,
                'callback_url' => 'http://localhost:8000/api/V1/transactions/callback',
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'title' => 'Payment for course purchase',
                'description' => 'Payment for course purchase',
                'logo' => 'https://chapa.link/asset/images/chapa_swirl.svg',
                // intentionally omitted return_url
            ];

            // dd($chapaData);
            // send the request to chapa API
            $chapaResponse = Http::withToken(env('CHAPA_SECRET_KEY'))
                ->post('https://api.chapa.co/v1/transaction/initialize', $chapaData);

            // dd($chapaResponse->json()); //works fine
            
            // handle the response
            if (!$chapaResponse->successful()) {
                return response()->json([
                    'error' => 'Error initiating payment',
                    'response' => $chapaResponse->body(),
                ], 500);
            }

            $responseBody = $chapaResponse->json();

            // save the chekout url based on chapa response
            if ($responseBody['status'] !== 'success') {
                return response()->json([
                    'error' => $responseBody['message'],
                ], 500);
            }

            // get chapa checkout url
            $checkout_url = $responseBody['data']['checkout_url'];

            return response()->json([
                'message' => 'Payment initiated successfully',
                'transaction' => $transaction,
                'checkout_url' => $checkout_url  // i will use this to redirect the user [frontend]
            ], 201);


        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }

    }
}