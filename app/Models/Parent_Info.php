<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent_Info extends Model
{
    protected $table = "parent__infos";
    protected $fillable = ['name', email, phone_number];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
