<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Api\V1\PaymentRequest;


class TransactionController extends Controller
{
    public function initiatePayment(PaymentRequest $request){
        

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
    }
    
       
}
