<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'instructor_id',
        'thumbnail',
        'price',
        'level',
        'requirements',
        'duration',
    ];

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function classrooms2()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_courses');
    }
}
