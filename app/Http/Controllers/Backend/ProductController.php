<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Product;
use DB;
use session;
use Image;

class ProductController extends Controller
{

    public function index()
    {
      return view ('backend.product.index');
    }

        public function ajax(Request $request)
        {
            $data = Product::query();
            return Datatables::of($data)
            ->addColumn('action',function($model){
                $str  = '<div class="btn-group btn-group-circle">';
                $str .= '<a href='. route('admin.product.edit', ['post' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                $str .= '<a data-url="'. route('admin.product.delete', ['post' => $model->id]) .'" data-toggle="modal" data-target="#modalDelete" data-title="Confirmation" data-table-name="#post-table" data-message="Would you like to delete this faq?" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                $str .= '</div>';
                return $str;
            })
        ->make(true);
        }

    public function create(Request $request , Product $product)
    {
      return view('admin.product.form');
    }


    public function store(Request $request)
    {
      $request->validate([
          'nama_product' => 'required',
          'slug'   => 'required|alpha_dash|max:200|unique:products,slug',
          'tipe_product' => 'required',
          'description' => 'required',
      ]);
      $product = new Product;
      $product->nama_product = $request->nama_product;
      $product->slug  = $request->slug;
      $product->tipe_product = $request->tipe_product;
      $product->description = $request->description;

      if($request->hasFile('post_thumbnail')){
        $post_thumbnail = $request->file('post_thumbnail');
        $filename = time() . '.'.$post_thumbnail->getClientOriginalExtension();
        Image::make($post_thumbnail)->resize(600, 600)->save( public_path('images/' . $filename ) );
      }

      $product->post_thumbnail = $filename;
      $product->save();
       Session::flash( 'sucess', 'Post published.' );
    return redirect()->route('admin.product.index',compact('product'));



    }


    public function show($slug)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        if ($request->ajax || $request->wantsjson())  {
          return response('success',200);
        }
        return redirect()->route('admin.product.index');
    }
}
