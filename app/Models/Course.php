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

    public function student() {
        return $this->belongsToMany(User::class, 'enrollments')->withPivot('progress', 'completed');
    }

    public function classrooms2()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_courses');
    }

    public function instructor() {
        return $this->belongsTo(User::class);
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
