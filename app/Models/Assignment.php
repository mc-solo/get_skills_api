<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
    'assignment_name',
    'description', 
    'due_date',
    'due_date',
    'course_id',
    'instructor_id'];
}

// todo:Relationship definitions
