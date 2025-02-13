<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEnrollmentRequest;
use App\Http\Requests\UpdateEnrollmentRequest;
use Symfony\Component\HttpFoundation\Response as Res;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function enroll(Request $request, Course $course){
        $userId = auth()->id(); 

        // check if the user is already enrolled
        if(Enrollment::where('user_id', $userId)->where('course_id', $course->id)->exists()){
            return response()->json(['message'=>'Already enrolled'], Res::HTTP_CONFLICT);
        }

        // and if the course is free, enroll immediately
        if($course->price == 0 ) {
            Enrollment::create([
                'user_id' => $userId,
                'course_id' => $course->id,
                'is_completed' => false,
                'progress' => 0,
                'payment_status' => 'free',
            ]);
            return response()->json(['message'=> 'Enrolled successfully'], Res::HTTP_CREATED);
        }

        // Todo: Implement payment gateway integration with chapa, santim pay and telebirr and certainly not with CBE those mfs
            

        // Enroll students with pending state for their payment [but still can't access the course :)]
        $enrollemnt = Enrollment::create([
            'user_id'=> $userId,
            'course_id'=> $course->id,
            'is_completed'=> false,
            'progress'=> 0,
            'payment_status'=> 'pending',
        ]);

        // not functional yet
        return response()->json(['message' => 'Proceed to payment'], Res::HTTP_ACCEPTED);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEnrollmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
