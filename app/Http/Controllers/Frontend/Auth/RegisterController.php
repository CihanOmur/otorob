<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Frontend.Auth.signup');
    }
    public function register(RegisterRequests $request)
    {
        $user = new User();
        $user->name = $request->fname . ' ' . $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->country = $request->country;
        $user->save();
        Auth::loginUsingId($user->id);
        $user->assignRole('Customer');
        return redirect()->route('admin.index');
    }
}
