<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Classroom extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'max_capacity'];
  
    protected $table = 'classrooms';

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function courses2()
    {
        return $this->belongsToMany(Course::class, 'classroom_courses');
    }
}
