<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
class ProdukController extends Controller
{


    public function index(Request $request , Product $post)
    {

        $products = Product::orderBy('created_at', 'desc')->paginate(4);

        return view('frontend.blogpage.product.produk',compact('products'));
    }


    public function produk($slug)
    {
        $data = Product::where('slug','=',$slug)->firstOrFail();

        return view('frontend.blogpage.product.post',compact('data'));
    }

    public function search(Request $request){
      $keyword  = $request->input('search');
      $searchdata = Product::where('nama_product','LIKE','%'.$keyword.'%')->first();
      return view('frontend.blogpage.product.search',compact('searchdata'));
    }


}
