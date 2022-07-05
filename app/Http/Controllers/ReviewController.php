<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function addReview($id, Request $request){

        $validation = Validator::make($request->all(), [
            'rec' => 'required',
            'review' => 'required'
        ]);

        if($validation->fails()){
            return back()->withErrors('All fields must be filled');
        }

        $review = Review::firstOrCreate([
            'user_id' => auth()->user()->id,
            'game_id' => $id
        ]);
    
        if ($review->wasRecentlyCreated) {
            $boolRec = false;
            if($request->rec == "yes"){
                $boolRec = true;
            }else{
                $boolRec = false;
            }
            
            $review->recommended = $boolRec;
            $review->user_id = auth()->user()->id;
            $review->isiReview = $request->review;
            $review->save();
            // dd($review);
            return back()->with('alert', 'Review added');
        }
    
        return back()->with('warning', 'You already reviewed this game');
    }
    
}
