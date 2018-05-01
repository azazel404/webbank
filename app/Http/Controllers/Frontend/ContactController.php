<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Mail;
use Session;
use Validator;

class ContactController extends Controller
{


    public function create()
    {
        $contact = DB::table('posts')->select('category')->paginate(5);
        return view('frontend.contact.form',compact('contact'));
    }

    public function store(Request $request){

      $this->validate($request,[
        'nama' => "required",
        'email' => "required|email",
        'no_hp' => "required|max:14",
        'pesan' => "required"
      ]);
      $data = array(
        'perihal' => $request->perihal,
        'nama' => $request->nama,
        'email' => $request->email,
        'no_hp' => $request->no_hp,
        'pesan' => $request->pesan
      );


          Mail::send('frontend.emails.contact-message',$data,function($message) use ($data)
            {
              $message->from($data['email']);
              $message->to('azazel4041@gmail.com','admin');
              $message->subject($data['pesan']);
            });
    return redirect()->back()->with('flash_message', 'Thank you for you Message');

    }

}
