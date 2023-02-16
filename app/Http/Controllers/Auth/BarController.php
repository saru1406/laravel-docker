<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:bar');
    }

    public function index()
    {
        return view('bars.index');
    }
}
