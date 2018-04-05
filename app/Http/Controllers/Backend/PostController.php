<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Post;
use DB;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.post.index',compact('posts'));
    }

    public function create(Post $post){
      return view('backend.post.create',compact('post'));
    }

    public function store(Request $request){

      $request->validate([
          'title' => 'required|max:255',
          'slug'   => 'required|alpha_dash|max:200|unique:posts,slug',
          'cover' => 'required|mimes:jpg,jpeg,png',
          'content' => 'required',
          'category' => 'required',
          'post_type' => 'required',
          ]);

        $post = new Post;
        $post->title = $request->title;
        $post->slug  = $request->slug;
        $cover = time().".".$request->cover->getClientOriginalExtension();
        $post->cover = $cover;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->post_type = $request->post_type;
        $request->cover->move(public_path('img/blog'), $cover);
        $post->save();

        return redirect()->route('adminpost.index');

    }

    public function edit(Post $post){
      return view('backend.post.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
         $post = Post::find($id);

        if (isset($request->cover)) {
            $cover = time().".".$request->cover->getClientOriginalExtension();
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->content = $request->content;
            $post->cover = $cover;
            $post->post_type = $request->post_type;
            $request->cover->move(public_path('img/blog'), $cover);
            $post->save();
            return redirect()->intended(route('adminpost.index'));
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->post_type = $request->post_type;
        $post->save();

        return redirect()->intended(route('adminpost.index'));
    }


    public function destroy(Request $request)
    {
       $post = Post::find($request->id);
       $post->delete();
      return redirect()->route('adminpost.index');
    }
}
