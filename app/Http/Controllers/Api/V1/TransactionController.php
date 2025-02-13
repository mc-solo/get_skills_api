<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Api\V1\PaymentRequest;


class TransactionController extends Controller
{
    public function initiatePayment(PaymentRequest $request){

        // generate a unique transaction reference
        $tx_ref = 'negade-' . uniqid();
        // prepare payload for the chapa Api request
        $transaction = Transaction::create([
            'amount'=>$request->amount,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'user_id'=>$request->user_id,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'tx_ref'=>$request->tx_ref,
            'currency'=>$request->currency,
            'status'=>$request->status,
        ]);

        
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('CHAPA_SECRET_KEY'),
            'Accept' => 'application/json',
        ])->post('https://api.chapa.co/v1/hosted/pay', [
            'public_key' => env('CHAPA_PUBLIC_KEY'),
            'tx_ref' => $tx_ref,
            'amount' => $transaction->amount,
            'currency' => $request->currency,
            'email' => $transaction->email,
            'first_name' => $transaction->first_name,
            'last_name' => $transaction->last_name,
            'title' => 'Course Enrollment',
            'description' => 'Payment for course enrollment on Get Skills',
            'callback_url' => route('chapa.callback'),
            'return_url' =>env('APP_URL') . '/payment-success',
            'user_id' => $transaction->user_id,
            'meta' => [
                'user_id' => $transaction->user_id,
                'course_id' => $request->course_id,
            ],
        ]);

        $responseData = $response->json();
        if ($response->successful()) {
            return response()->json([
                'message' => 'Payment initiated successfully',
                'checkout_url' => $responseData['data']['checkout_url'],
            ], 200);
        } else {
            
            return response()->json([
                'message' => 'Payment initiation failed',
                'error' => $responseData['message'],
            ], $response->status());

        }
        

    }
    
       
}
