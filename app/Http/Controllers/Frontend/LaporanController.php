<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Publikasi;
use App\Models\Kelola;
use DB;

use Session;
use Validator;

class LaporanController extends Controller
{


    public function createPublikasi(Publikasi $publikasi)
    {
        $post = DB::table('posts')->select('category')->paginate(5);
        $publikasis= Publikasi::all();
        dd($publikasis);
        return view('frontend.blogpage.laporan.laporan-publikasi',compact('post','publikasis'));
    }

    public function createKelola(Kelola $kelola)
    {
        $post = DB::table('posts')->select('category')->paginate(5);
        $kelolas= Kelola::all();
        return view('frontend.blogpage.laporan.laporan-kelola',compact('post','kelolas'));
    }

}
