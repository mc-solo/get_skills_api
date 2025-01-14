<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  
use App\Models\Assignment;

class Upload extends Model
{
    use HasFactory;
    protected $fillable = ['file_path', 'file_type', 'file_name', 'description'];

    public function users() {
        return $this->hasOne(User::class);
    }

    public function assignments(){
        return $this->belongsTo(Assignment::class);
    }
}
