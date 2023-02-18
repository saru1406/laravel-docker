<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store (Request $request)
    {
        $user = \Auth::user();

        $review = new Review;
        $review->bar_id = $request->input('bar_id');
        $review->user_id = $user->id;
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->save();

        return redirect()->route('bars.index');
    }

    public function show ()
    {
        return view('public.reviews.show');
    }
}
