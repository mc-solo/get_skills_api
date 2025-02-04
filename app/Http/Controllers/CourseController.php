<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    /*
    * Notes for Emmanuel: incase it confuses you, this index method below 
    * fetches all the courses along with instrcutor[Eager load] and converts it into json format
    */
    public function index(){
        return response()->json(Course::with('instructor')->get());
    }

    // validation for the course creation request
    public function store(Request $request){
        $request->validate([
            'title'=> 'required | string | 255',
            'description'=> 'required | string',
            'price' => 'nullable | numeric| min:0',
            'level'=> 'required |in:beginner , intermidiate, advanced',
            'thumbnail'=>'nullable | string',
        ]);

        // creates the course in our db
        $course = Course::create([
            'instructor_id' => auth()->id(),
            'title'=>$request->title,
            'description'=> $request->description,
            'price'=>$request->price,
            'level'=>$request->level,
            'thumbnail'=> $request->thumbnail,

        ]);

        return response()->json([
            'message'=>'Course created successfully',
            'course'=>$course,
        ]);


    }

    

}