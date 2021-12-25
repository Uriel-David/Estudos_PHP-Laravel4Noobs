<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function getPosts()
    {
        /* $posts = Post::paginate(15);
        return response()->json($posts); */

        $users = User::all();
        $posts = Post::paginate(3);
        return view('managePosts', compact(['users', 'posts']));
    }

    public function postBlogPost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);

        $data = $request->only(['title', 'content', 'user_id']);
        $data['published'] = $request->has('published');

        Post::create($data);

        return redirect('/posts');
    }

    public function getPost(Post $post)
    {
        return response()->json($post);
    }
}
