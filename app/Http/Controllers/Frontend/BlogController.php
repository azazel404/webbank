<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
class BlogController extends Controller
{


    public function index(Request $request , Post $post)
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        $dokumen = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.blogpage.index',compact('posts','dokumen'));
    }

    public function showBlog(Request $request , Post $post)
    {

        $posts = Post::orderBy('created_at', 'desc')->paginate(4);

        return view('frontend.blogpage.article.blog',compact('posts'));
    }

    public function post($slug)
    {
        $data = Post::where('slug','=',$slug)->firstOrFail();

        return view('frontend.blogpage.article.post',compact('data'));
    }

    public function search(Request $request){
      $keyword  = $request->input('search');
      $searchdata = Post::where('title','LIKE','%'.$keyword.'%')->first();
      return view('frontend.blogpage.article.search',compact('searchdata'));
    }


}
