<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Cloudinary;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }
    
    public function comment(Comment $comment)
    {
        $postId = $request->input('post_id');
        
        $comment = new Comment([
                'user_id' => auth()->id(),
                'post_id' => $postId,
                'content' => $request->input('content'),
            ]);
            $comment->save();
            return redirect('/posts/'.$post->id);
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $post->user_id = \Auth::id();
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $post->image = $image_url;
        }
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
