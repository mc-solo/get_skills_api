<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'phone_number',
        'email',
        'tx_ref',
        'amount',
        'currency',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
