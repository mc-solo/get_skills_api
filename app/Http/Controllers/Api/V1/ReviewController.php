<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\Api\V1\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\ReviewRequest;
use Symfony\Component\HttpFoundation\Response as Res;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return ReviewResource::collection(Review::with(['user:id,first_name', 'course:id'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request){
        
        $review = Review::create([
            'user_id' => auth()->id(),
            'course_id' => $request->course_id,
            'rating' => $request->rating,
            'comment' => $request->comment ?? null,
        ]);

        return new ReviewResource($review);
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Review $review ){
        return new ReviewResource($review);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, Review $review) {
        if($review->user_id !== auth()->id()){
            return response()->json(['message' => 'Unauthorized'], Res::HTTP_UNAUTHORIZED);
        }

        $review->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review) {
        if($review->user_id !== auth()->id()){
            return response()->json(['message' => 'Unauthorized'], Res::HTTP_UNAUTHORIZED);
        }

        $review->delete();
        return response()->json(null, Res::HTTP_NO_CONTENT);
    }
}
