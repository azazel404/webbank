<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Kelola;
use DB;
use Notify;

class LaporanKelolaController extends Controller
{

    public function index()
    {

        return view('backend.kelola.index');
    }

    public function ajax(Request $request)
    {
      $data = Kelola::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminkelola.edit', ['kelola' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminkelola.delete', ['kelola' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#kelola-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(kelola $kelola){
      return view('backend.kelola.create',compact('kelola'));
    }

    public function store(Request $request){

      $request->validate([
        'laporan' => 'required|mimes:doc,docx,pdf',
        'nama_laporan' => 'required',
        'tipe_laporan' => 'required',
        'tanggal' => 'required',
      ]);

        $kelola = new Kelola;
        $laporan = time().".".$request->laporan->getClientOriginalExtension();
        $kelola->laporan = $laporan;
        $kelola->nama_laporan = $request->nama_laporan;
        $kelola->tipe_laporan = $request->tipe_laporan;
        $kelola->tanggal = $request->tanggal;
        $request->laporan->move(public_path('img/laporan/kelola/'), $laporan);
        $kelola->save();
        Notify::success('The Data has been created','success');
        return redirect()->route('adminkelola.index');

    }

    public function edit(Kelola $kelola){
      return view('backend.kelola.edit',compact('kelola'));
    }

    public function update(Request $request,$id)
    {
         $kelola = Kelola::find($id);

        if (isset($request->laporan)) {
            $laporan = time().".".$request->laporan->getClientOriginalExtension();
            $kelola->laporan = $laporan;
            $request->laporan->move(public_path('img/laporan/kelola/'), $laporan);
        }

        $kelola->nama_laporan = $request->nama_laporan;
        $kelola->tipe_laporan = $request->tipe_laporan;
        $kelola->tanggal = $request->tanggal;
        $kelola->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('adminkelola.index'));
    }


    public function destroy(Request $request)
    {
       $kelola = Kelola::find($request->id);
       $kelola->delete();
       Notify::success('The Data has been deleted','success');
       return redirect()->route('adminkelola.index');
    }
}
