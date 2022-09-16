<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNot('id', auth()->user()->id)->get();
        return view('Admin.user.user', [
            'users' => $users,
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
