<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('./users/index', [
            'users' => User::all() ? User::all() : []
        ]);
    }
    public function create()
    {
        return view('./users/create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return view('./users/index', [
            'users' => User::all()
        ]);
    }

    public function edit(User $user)
    {
        return view('./users/edit', [
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return view('./users/index', [
            'users' => User::all()
        ]);
    }

    // get user posts by route id
    public function posts($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts;

        return view('./posts/index', [
            'user' => $user,
            'users' => User::all(),
            'posts' => $posts
        ]);
    }

    public function latestPost($id)
    {
        $user = User::findOrFail($id);
        $post = $user->posts()->latest()->first();

        return view('./posts/index', [
            'user' => $user,
            'users' => User::all(),
            'posts' => isset($post) ? [$post] : []
        ]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return view('./users/index', [
            'users' => User::all()
        ]);
    }
}