<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return [
                auth()->user()->email,
                auth()->user()->getRoleNames(),
            ];
        }
        else {
            return 'home';
        }
    }
}
