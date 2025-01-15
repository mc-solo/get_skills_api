<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassroomCourse extends Pivot
{
    protected $table = 'classroom_courses';

    protected $fillable = ['classroom_id', 'course_id'];
}
