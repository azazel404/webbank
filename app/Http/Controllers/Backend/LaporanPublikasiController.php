<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Publikasi;
use DB;
use Notify;

class LaporanPublikasiController extends Controller
{

    public function index()
    {

        return view('backend.publikasi.index');
    }

    public function ajax(Request $request)
    {
      $data = Publikasi::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminpublikasi.edit', ['publikasi' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminpublikasi.delete', ['publikasi' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#publikasi-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(Publikasi $publikasi){
      return view('backend.publikasi.create',compact('publikasi'));
    }

    public function store(Request $request){

        $request->validate([
          'laporanpertama' => 'required|mimes:doc,docx,pdf',
          'nama_laporanpertama' => 'required',
          'laporankedua' => 'required|mimes:doc,docx,pdf',
          'nama_laporankedua' => 'required',
          'laporanketiga' => 'required|mimes:doc,docx,pdf',
          'nama_laporanketiga' => 'required',
          'laporankeempat' => 'required|mimes:doc,docx,pdf',
          'nama_laporankeempat' => 'required',
          'tipe_laporan' => 'required',
          'tanggal' => 'required',
        ]);

        $publikasi = new Publikasi;
        $laporanpertama = str_random(4).".".$request->laporanpertama->getClientOriginalExtension();
        $publikasi->laporanpertama = $laporanpertama;
        $laporankedua = str_random(4).".".$request->laporankedua->getClientOriginalExtension();
        $publikasi->laporankedua = $laporankedua;
        $laporanketiga = str_random(4).".".$request->laporanketiga->getClientOriginalExtension();
        $publikasi->laporanketiga = $laporanketiga;
        $laporankeempat = str_random(4).".".$request->laporankeempat->getClientOriginalExtension();
        $publikasi->laporankeempat = $laporankeempat;
        $publikasi->nama_laporanpertama = $request->nama_laporanpertama;
        $publikasi->nama_laporankedua = $request->nama_laporankedua;
        $publikasi->nama_laporanketiga = $request->nama_laporanketiga;
        $publikasi->nama_laporankeempat = $request->nama_laporankeempat;
        $publikasi->tipe_laporan = $request->tipe_laporan;
        $publikasi->tanggal = $request->tanggal;
        $request->laporanpertama->move(public_path('img/laporan/publikasi/'), $laporanpertama);
        $request->laporankedua->move(public_path('img/laporan/publikasi/'), $laporankedua);
        $request->laporanketiga->move(public_path('img/laporan/publikasi/'), $laporanketiga);
        $request->laporankeempat->move(public_path('img/laporan/publikasi/'), $laporankeempat);
        $publikasi->save();
        Notify::success('The Data has been created','success');
        return redirect()->route('adminpublikasi.index');

    }

    public function edit(Publikasi $publikasi){
      return view('backend.publikasi.edit',compact('publikasi'));
    }

    public function update(Request $request,$id)
    {
         $publikasi = Publikasi::find($id);

        if (isset($request->laporan)) {
          $laporanpertama = str_random(4).".".$request->laporanpertama->getClientOriginalExtension();
          $publikasi->laporanpertama = $laporanpertama;
          $laporankedua = str_random(4).".".$request->laporankedua->getClientOriginalExtension();
          $publikasi->laporankedua = $laporankedua;
          $laporanketiga = str_random(4).".".$request->laporanketiga->getClientOriginalExtension();
          $publikasi->laporanketiga = $laporanketiga;
          $laporankeempat = str_random(4).".".$request->laporankeempat->getClientOriginalExtension();
          $publikasi->laporankeempat = $laporankeempat;
            $request->laporanpertama->move(public_path('img/laporan/publikasi'), $laporanpertama);
            $request->laporankedua->move(public_path('img/laporan/publikasi'), $laporankedua);
            $request->laporanketiga->move(public_path('img/laporan/publikasi'), $laporanketiga);
            $request->laporankeempat->move(public_path('img/laporan/publikasi'), $laporankeempat);
        }
        $publikasi->nama_laporanpertama = $request->nama_laporanpertama;
        $publikasi->nama_laporankedua = $request->nama_laporankedua;
        $publikasi->nama_laporanketiga = $request->nama_laporanketiga;
        $publikasi->nama_laporankeempat = $request->nama_laporankeempat;
        $publikasi->tipe_laporan = $request->tipe_laporan;
        $publikasi->tanggal = $request->tanggal;
        $publikasi->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('adminpublikasi.index'));
    }


    public function destroy(Request $request)
    {
       $publikasi = Publikasi::find($request->id);
       $publikasi->delete();
       Notify::success('The Data has been deleted','success');
       return redirect()->route('adminpublikasi.index');
    }
}
