<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $user =\Auth::user();
        return view('users.show' ,compact('user'));
    }

    public function edit()
    {
        $user = \Auth::user();
        return view('users.edit' ,compact('user'));
    }

    public function update(Request $request)
    {
        $user = \Auth::user();

        $user->name = $request->input('name');
        $user->save();
        
        return redirect()->route('my_page')->with('flash_message', '変更されました');
    }
}
