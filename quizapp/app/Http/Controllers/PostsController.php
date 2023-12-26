<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view('posts.show', compact('post'));
    }

   public function storeComment(Request $request, Post $post)
   {
       $validator = Validator::make($request->all(), [
           'username' => 'required|max:255',
           'comment' => 'required'
       ]);

       if ($validator->fails()) {
           return response()->json(['errors' => $validator->errors()->all()], 422);
       }

       $comment = $post->comments()->create([
           'username' => $request->input('username'),
           'comment' => $request->input('comment')
       ]);

       return response()->json([
           'comment' => $comment->load('post'),
           'success' => 'Comment created successfully!'
       ]);
   }

}
