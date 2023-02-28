<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\ReviewComment;
use App\Models\Bar;
use App\Repositories\User\UserRepository;

class ReviewController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store (Request $request)
    {
        $user = $this->userRepository->find();
        
        $review = new Review;
        $review->bar_id = $request->input('bar_id');
        $review->user_id = $user->id;
        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->save();

        return redirect()->route('bars.index');
    }

    public function show (int $id)
    {
        $bars = Bar::all();
        $review = Review::find($id);
        $review_comments = $review->review_comments;

        return view('public.reviews.show',compact('review','review_comments','bars'));
    }
}
