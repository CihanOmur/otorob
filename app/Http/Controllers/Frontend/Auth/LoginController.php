<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('Frontend.Auth.signin');
    }
    
    public function login(LoginRequests $request)
    {
        if (Arr::has($request->all(), 'remember')) {
            Auth::attempt(['email' => $request->email, 'password' => $request->password], true);
        }
        else {
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        }
        return redirect(url()->previous());
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
