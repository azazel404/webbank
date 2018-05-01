<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager as Image;
use Illuminate\Http\Request;
use App\Models\Penghargaan;
use App\Models\Post;
use Auth;
use DB;
class AwardController extends Controller
{


    public function index(Request $request , Post $post)
    {

        $awards = Penghargaan::orderBy('created_at', 'desc')->paginate(6);
        $post = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('frontend.blogpage.award.index',compact('awards','post'));
    }

    public function search(Request $request){
      $keyword  = $request->input('search');
      $searchdata = Post::where('title','LIKE','%'.$keyword.'%')->first();
      return view('frontend.blogpage.article.search',compact('searchdata'));
    }


}
