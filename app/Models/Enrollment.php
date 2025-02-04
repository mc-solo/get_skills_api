<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'progress',
        'completed',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    
}

