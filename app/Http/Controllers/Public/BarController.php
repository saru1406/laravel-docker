<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bar;
use App\Models\Review;
use App\Repositories\Bar\BarRepository;

class BarController extends Controller
{
    protected $barRepository;

    public function __construct(BarRepository $barRepository)
    {
        $this->barRepository = $barRepository;
    }

    public function index(Request $request)
    {
        $bar_all = $this->barRepository->all();

        // 検索機能
        $smoke_status = $request->input('smoke_status');
        $seat_status = $request->input('seat_status');
        $query = Bar::query();
        if (!empty($smoke_status)) {
            $query->where('smoke_status', 'LIKE', "%{$smoke_status}%")
            ->orwhere('seat_status', 'LIKE', "%{$seat_status}%");
        }
        $bars = $query->get();
        
        return view('public.bars.index' ,compact('bars','bar_all'));
    }

    public function show(int $id)
    {
        $bar = $this->barRepository->find($id);
        $reviews = $bar->reviews;

        return view('public.bars.show', compact('bar','reviews'));
    }
}
