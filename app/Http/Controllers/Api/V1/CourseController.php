<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CourseResource;

class CourseController extends Controller
{

    /*
    * Notes for Emmanuel: incase it confuses you, this index method below 
    * fetches all the courses along with instrcutor[Eager load] and converts it into json format
    */
    public function index(){
        $courses = Course::with('instructor:id,first_name')->get();
        return CourseResource::collection($courses);
    }

    public function store(CourseRequest $request){
      
        $course = Course::create([
            'instructor_id' => auth()->id(),
            'title'=>$request->title,
            'description'=> $request->description,
            'thumbnail' => $request->thumbnail,
            'price'=>$request->price,
            'level'=>$request->level,
            'requirements'=>$request->requirements,
            'video_url'=>$request->video_url,
            'tags'=>$request->tags,
        ]);

        return new CourseResource($course);

    }

    public function show(Course $course) {
        $course->load('instructor:id,name');
        return new CourseResource($course);
    }

    public function update(CourseRequest $request, Course $course) {
        if($course->instructor_id !== auth()->id()){
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $course->update($request->validated());
        return new CourseResource($course);
    }

    public function destroy(Course $course) {
        if($course->instructor_id !== auth()->id()){
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $course->delete();
        return response()->json(['message' => 'Course deleted successfully'], 200);
    }
}