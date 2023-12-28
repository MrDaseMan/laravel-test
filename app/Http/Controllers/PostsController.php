<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
use App\Models\Comments;

class PostsController extends Controller
{
    public function index()
    {
        return view('./posts/index', [
            'posts' => Post::where('is_published', true)->get(),
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('./posts/create', [
            'users' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->user_id;
        $post->image = $request->image;
        $post->likes = 0;
        $post->is_published = true;
        $post->save();
        return redirect('/posts');
    }

    public function user($id)
    {
        $user = User::findOrFail($id);

        return view('./users/index', [
            'users' => isset($user) ? [$user] : [],
            'user_id' => $id
        ]);
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }

    public function addLike($id)
    {
        $post = Post::findOrFail($id);
        $post->likes += 1;
        $post->save();
        return redirect('/posts');
    }

    public function removeLike($id)
    {
        $post = Post::findOrFail($id);
        $post->likes -= 1;
        $post->save();
        return redirect('/posts');
    }

    public function comment($id, Request $request)
    {
        $post = Post::findOrFail($request->id);
        $comment = new Comments();
        $comment->content = $request->content;
        $comment->user_id = $request->user_id;
        $comment->post_id = $id;
        $comment->save();
        return redirect('/posts');
    }

    public function comments($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;

        return view('./posts/index', [
            'users' => User::all(),
            'posts' => isset($post) ? [$post] : [],
            'post_comments_id' => $id,
        ]);
    }

    public function deleteComment($id)
    {
        $comment = Comments::findOrFail($id);
        $comment->delete();
        return redirect('/posts');
    }
}
