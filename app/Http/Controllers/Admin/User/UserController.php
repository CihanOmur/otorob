<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAddRequests;
use App\Http\Requests\UserEditRequests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->user()->getRoleNames()[0] != 'Super Admin') {
            $users = User::whereNot('id', auth()->user()->id)->get()->filter(function ($user) {
                return $user->getRoleNames()[0] != 'Super Admin';
            });
        }
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

    public function add()
    {
        $roles = Role::latest()->get()->pluck('name');
        return view('Admin.user.add', [
            'roles' => $roles,
            'countries' => Cache::get('countries'),
        ]);
    }
    public function create(UserAddRequests $request)
    {
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->country = $request->country;
        $user->address = $request->address;
        $user->ip = $request->ip();
        $user->save();
        $user->assignRole($request->role);
        return redirect()->route('admin.user.index');
    }

    public function edit(User $user)
    {
        $roles = Role::latest()->get()->pluck('name');
        return view('Admin.user.edit', [
            'roles' => $roles,
            'user' => $user,
            'countries' => Cache::get('countries'),
        ]);
    }

    public function update(UserEditRequests $request, User $user)
    {
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if (!is_null($user->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->country = $request->country;
        $user->address = $request->address;
        $user->save();
        foreach ($user->getRoleNames() as $item) {
            $user->removeRole($item);
        }
        $user->assignRole($request->role);
        return redirect()->route('admin.user.index');
    }
    public function view(User $user)
    {
        $roles = Role::latest()->get()->pluck('name');
        return view('Admin.user.user-profile', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }
}
