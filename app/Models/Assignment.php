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


    // table_relations
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function uploads(){
        return $this->hasMany(Upload::class);
    }

    public function courses(){
        return $this->belongsTo(Course::class);
    }

}


