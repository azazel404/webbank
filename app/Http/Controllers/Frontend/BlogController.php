<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class BlogController extends Controller
{


    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.blogpage.index',compact('posts'));
    }

    public function post($slug)
    {
        $data = Post::where('slug','=',$slug)->first();
        return view('frontend.blogpage.post',compact('data'));
    }
}
