<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Product;
use DB;
use Notify;

class ProductController extends Controller
{

    public function index()
    {

        return view('backend.product.index');
    }

    public function ajax(Request $request)
    {
      $data = Product::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminproduct.edit', ['product' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminproduct.delete', ['product' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#product-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(Product $product){
      return view('backend.product.create',compact('product'));
    }

    public function store(Request $request){

      $request->validate([
          'nama_product' => 'required|max:255',
          'slug'   => 'required|alpha_dash|max:200|unique:products,slug',
          'cover' => 'required|mimes:jpg,jpeg,png',
          'tipe_product' => 'required|max:255',
          'description' => 'required',
          'author' => 'required|max:255',
          ]);

        $product = new Product;
        $product->nama_product = $request->nama_product;
        $product->slug  = $request->slug;
        $cover = time().".".$request->cover->getClientOriginalExtension();
        $product->cover = $cover;
        $product->description = $request->description;
        $product->tipe_product = $request->tipe_product;
        $product->category = $request->category;
        $product->author = $request->author;
        $request->cover->move(public_path('img/produk'), $cover);
        $product->save();
        Notify::success('The Data has been created','success');
        return redirect()->route('adminproduct.index');

    }

    public function edit(Product $product){
      return view('backend.product.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {
         $product = Product::find($id);

        if (isset($request->cover)) {
            $cover = time().".".$request->cover->getClientOriginalExtension();
            $product->cover = $cover;
            $request->cover->move(public_path('img/produk'), $cover);
        }
        $product->nama_product = $request->nama_product;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->tipe_product = $request->tipe_product;
        $product->category = $request->category;
        $product->author = $request->author;
        $product->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('adminproduct.index'));
    }


    public function destroy(Request $request)
    {
       $product = Product::find($request->id);
       $product->delete();
       Notify::success('The Data has been deleted','success');
       return redirect()->route('adminproduct.index');
    }
}
