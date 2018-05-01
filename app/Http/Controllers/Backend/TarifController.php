<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Tarif;
use DB;
use Notify;

class TarifController extends Controller
{

    public function index()
    {

        return view('backend.tarif.index');
    }

    public function ajax(Request $request)
    {
      $data = Tarif::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('admintarif.edit', ['tarif' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('admintarif.delete', ['tarif' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#product-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(Tarif $tarif){
      return view('backend.tarif.create',compact('tarif'));
    }

    public function store(Request $request){

      $request->validate([
          'keterangan' => 'required|max:255',
          'rate'   => 'required|numeric',
          ]);

          Tarif::create([
            'keterangan' => $request->keterangan,
            'rate' => $request->rate,
          ]);
          Notify::success('The Data has been created','success');
        return redirect()->route('admintarif.index');

    }

    public function edit(Tarif $tarif){
      return view('backend.tarif.edit',compact('tarif'));
    }

    public function update(Request $request,$id)
    {
        $tarif = Tarif::find($id);
        $tarif->keterangan = $request->keterangan;
        $tarif->rate = $request->rate;
        $tarif->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('admintarif.index'));
    }


    public function destroy(Request $request)
    {
       $tarif = Tarif::find($request->id);
       $tarif->delete();
       Notify::success('The Data has been deleted','success');
       return redirect()->route('admintarif.index');
    }
}
