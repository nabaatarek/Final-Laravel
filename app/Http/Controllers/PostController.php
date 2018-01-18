<?php
namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('posts', compact('user'));
    }
    public function post(Post $post)
    {
        return view('post.post', compact('post'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }
    public function save(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->post = $request->post;
        $post->user_id = Auth::id();
        $post->category_id = $request->categories;
        $post->image = 'https://lorempixel.com/200/200/?40282';
        $post->save();
        return redirect('/posts');
    }
}