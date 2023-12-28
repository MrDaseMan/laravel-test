<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        return view('./tags/index', [
            'tags' => Tag::all()
        ]);
    }

    public function create()
    {
        return view('./tags/create');
    }

    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return redirect('/tags');
    }

    public function delete(Request $request)
    {
        $tag = Tag::find($request->id);
        $tag->delete();
        return redirect('/tags');
    }
}