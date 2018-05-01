<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Report;
use DB;
use Mail;
use Session;
use Validator;

class LaporanController extends Controller
{


    public function createPublikasi()
    {
        $post = DB::table('posts')->select('category')->paginate(5);
        $reports = Report::all();
        return view('frontend.blogpage.laporan.laporan-publikasi',compact('post','reports'));
    }

    public function createKelola(Report $report)
    {
        $post = DB::table('posts')->select('category')->paginate(5);
        $reports = Report::all();
        return view('frontend.blogpage.laporan.laporan-kelola',compact('post','reports'));
    }

    public function store(Request $request){

    }

}
