<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Notify;


class PostController extends Controller
{

    public function index()
    {

        return view('backend.post.index');
    }

    public function ajax(Request $request)
    {
      $data = Post::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminpost.edit', ['post' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminpost.delete', ['post' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#post-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
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
        $post->author = $request->author;
        $request->cover->move(public_path('img/blog'), $cover);
        $post->save();
        Notify::success('The Data has been created','success');
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
            $post->cover = $cover;
            $request->cover->move(public_path('img/blog'), $cover);
        }
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->post_type = $request->post_type;
        $post->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('adminpost.index'));
    }

    public function destroy(Request $request)
    {
      $post = Post::find($request->id);
        $post->delete();
        // if(unlink("./img/blog/".$post->cover)){
        //
        //   return redirect()->route('adminpost.index');
        // }
    Notify::success('The Data has been deleted','success');
    return redirect()->route('adminpost.index');
    }
}
