<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Auth;

class BarLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:bar')->except('logout');
    }

    public function showLoginForm()
    {
        return view('bars.login');
    }

    public function login(Request $request)
    {
        // ログイン時のバリデーション
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('bar')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // ログインが成功したとき
            return redirect()->intended(route('bar.index'));
        }

        // ログインが失敗したとき
        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    public function username()
    {
        return 'email';
    }

    public function logout()
    {
        Auth::guard('bar')->logout();
        return redirect()->route('bar.login');
    }
}
