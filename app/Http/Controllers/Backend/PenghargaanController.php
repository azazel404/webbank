<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Penghargaan;
use DB;
use Notify;

class PenghargaanController extends Controller
{

    public function index()
    {

        return view('backend.penghargaan.index');
    }

    public function ajax(Request $request)
    {
      $data = Penghargaan::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminpenghargaan.edit', ['penghargaan' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminpenghargaan.delete', ['penghargaan' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#penghargaan-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(Penghargaan $penghargaan){
      return view('backend.penghargaan.create',compact('penghargaan'));
    }

    public function store(Request $request){

        $request->validate([
          'cover' => 'required|mimes:jpg,jpeg,png',
          'description' => 'required',
        ]);

        $penghargaan = new Penghargaan;
        $cover = time().".".$request->cover->getClientOriginalExtension();
        $penghargaan->cover = $cover;
        $penghargaan->description = $request->description;
        $request->cover->move(public_path('img/penghargaan'), $cover);
        $penghargaan->save();
        Notify::success('The Data has been created','success');
        return redirect()->route('adminpenghargaan.index');

    }

    public function edit(Penghargaan $penghargaan){
      return view('backend.penghargaan.edit',compact('penghargaan'));
    }

    public function update(Request $request,$id)
    {
         $penghargaan = Penghargaan::find($id);

        if (isset($request->cover)) {
            $cover = time().".".$request->cover->getClientOriginalExtension();
            $penghargaan->cover = $cover;
            $request->cover->move(public_path('img/penghargaan'), $cover);
        }

        $penghargaan->description = $request->description;
        $penghargaan->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('adminpenghargaan.index'));
    }


    public function destroy(Request $request)
    {
       $penghargaan = Penghargaan::find($request->id);
       $penghargaan->delete();
       Notify::success('The Data has been deleted','success');
       return redirect()->route('adminpenghargaan.index');
    }
}
