<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Faker\Provider\ar_EG\Payment;
use App\Http\Requests\Api\V1\PaymentRequest;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    public function store(PaymentRequest $request)
    {
        $transaction = Transaction::create($request->validated());
        return response()->json($transaction, 201);
    }
}
