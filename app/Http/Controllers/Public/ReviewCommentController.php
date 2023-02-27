<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReviewComment;

class ReviewCommentController extends Controller
{
    public function store(Request $request)
    {
        $user = \Auth::user();

        $review_comment = new ReviewComment;
        $review_comment->user_id = $user->id;
        $review_comment->bar_id = $request->input('bar_id');
        $review_comment->review_id = $request->input('review_id');
        $review_comment->body = $request->input('body');
        $review_comment->save();

        return back();
    }

    public function destroy(int $id)
    {
        $review_comment = ReviewComment::find($id);
        $review_comment->delete();

        return back();
    }
}
