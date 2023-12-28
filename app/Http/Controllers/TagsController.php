<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tags;

class TagsController extends Controller
{
    public function index()
    {
        return view('./tags/index', [
            'tags' => Tags::all()
        ]);
    }

    public function create()
    {
        return view('./tags/create');
    }

    public function store(Request $request)
    {
        $tag = new Tags();
        $tag->name = $request->name;
        $tag->save();
        return redirect('/tags');
    }

    public function delete(Tags $tag)
    {
        $tag->delete();
        return redirect('/tags');
    }
}