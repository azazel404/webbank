<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Biodata;
use Validator;
use DB;
use Auth;
use Notify;

class BiodataController extends Controller
{



    public function index()
    {
        return view('backend.biodata.index');
    }

    public function ajax(Request $request)
    {
      $data = Biodata::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminbiodata.edit', ['biodata' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminbiodata.delete', ['biodata' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#post-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(Biodata $biodata){
      return view('backend.biodata.create');
    }

    public function store(Request $request){

      $request->validate([
        'nik' => 'required|unique:biodatas',
        'nama' => 'required|max:255',
        'no_hp' => 'required',
        'jenis_kelamin' => 'required|string',
        'cover' => 'required|mimes:jpg,jpeg,png',
        'jabatan' => 'required',

      ]);
      $cover = time().".".$request->cover->getClientOriginalExtension();
      Biodata::create([
      'nik' => $request->nik,
      'nama' => $request->nama,
      'user_id' => Auth::user()->id,
      'cover' => $cover,
      'no_hp' => $request->no_hp,
      'jenis_kelamin' => $request->jenis_kelamin,
      'jabatan' => $request->jabatan,
      'alamat' => $request->alamat
      ]);
      $request->cover->move(public_path('img/biodata'), $cover);
      Notify::success('The Data has been created','success');
        return redirect()->route('adminbiodata.index');

    }

    public function show (Biodata $biodata){
      return view('backend.biodata.details');
    }

    public function edit(Biodata $biodata){
      return view('backend.biodata.edit',compact('biodata'));
    }

    public function update(Request $request,$id)
    {
         $biodata = Biodata::find($id);

        if (isset($request->cover)) {
            $cover = time().".".$request->cover->getClientOriginalExtension();
            $biodata->cover = $cover;
            $request->cover->move(public_path('img/biodata'), $cover);
        }
        $biodata->nik = $request->nik;
        $biodata->nama = $request->nama;
        $biodata->no_hp = $request->no_hp;
        $biodata->jenis_kelamin = $request->jenis_kelamin;
        $biodata->jabatan = $request->jabatan;
        $biodata->alamat = $request->alamat;
        $biodata->save();
        Notify::success('The user has been edited','success');
        return redirect()->intended(route('adminbiodata.index'));
    }


    public function destroy(Request $request)
    {
       $biodata = Biodata::find($request->id);
       $biodata->delete();
       Notify::success('The Data has been deleted','success');
      return redirect()->route('adminbiodata.index');
    }
}
