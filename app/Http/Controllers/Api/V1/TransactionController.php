<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function initiatePayment(Request $request)
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
        $transactionData['tx_ref'] = 'negade-' . uniqid();
        $transactionData['currency'] = 'ETB';
        $transactionData['status'] = 'pending';

        try {
            // Create the transaction
            $transaction = Transaction::create($transactionData);
        } catch (\Exception $e) {
            // Handle any errors that may occur
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }

        // Return success response
        return response()->json([
            'message' => 'Payment initiated successfully',
            'transaction' => $transaction
        ], 201);
    }
}
