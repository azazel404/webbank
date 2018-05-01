<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\Post;
use App\Models\Product;
use DB;

class AdminController extends Controller
{

  public function countData(){
    $post = DB::table('posts')->count();
    $product = DB::table('products')->count();
    return view ('backend.dashboard.index')->with(['post' => $post,'product' => $product]);
  }

  protected function guard()
  {
      return Auth::guard();
  }

  public function logout(Request $request)
  {
      $this->guard()->logout();

      $request->session()->invalidate();

      return redirect()->route('tampil.index');
  }
}
