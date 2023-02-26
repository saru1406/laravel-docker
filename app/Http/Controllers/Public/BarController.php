<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bar;
use App\Models\Review;

class BarController extends Controller
{
    public function index()
    {
        $bars = Bar::all();

        return view('public.bars.index' ,compact('bars'));
    }

    public function show(int $id)
    {
        $bar = Bar::find($id);
        $reviews = $bar->reviews;

        return view('public.bars.show', compact('bar','reviews'));
    }
}
