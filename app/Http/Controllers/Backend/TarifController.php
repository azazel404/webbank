<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Tarif;
use DB;

class TarifController extends Controller
{

    public function index()
    {
      return view ('backend.tarif.index');
    }

        public function ajax(Request $request)
        {
            $data = Tarif::query();
            return Datatables::of($data)
            ->addColumn('action',function($model){
                $str  = '<div class="btn-group btn-group-circle">';
                $str .= '<a href='. route('admin.tarif.edit', ['post' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                $str .= '<a data-url="'. route('admin.tarif.delete', ['post' => $model->id]) .'" data-toggle="modal" data-target="#modalDelete" data-title="Confirmation" data-table-name="#post-table" data-message="Would you like to delete this faq?" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                $str .= '</div>';
                return $str;
            })
        ->make(true);
        }

    public function create(Request $request , Product $product)
    {
      return view('admin.tarif.form');
    }


    public function store(Request $request)
    {
      $request->validate([
          'keteragan' => 'required',
          'dana_siswa'  => 'required',
          'dana_nusa' => 'required',
          'dana_viplus' => 'required',
          'tabunganku' => 'required',
          'mikro' => 'required',
          'sukubunga' => 'required',
      ]);

      $tarif = new Tarif;
      $tarif->keterangan = $request->keteragan;
      $tarif->dana_siswa  = $request->dana_siswa;
      $tarif->dana_nusa = $request->dana_nusa;
      $tarif->dana_viplus = $request->dana_viplus;
      $tarif->tabungaku = $request->tabungaku;
      $tarif->mikro = $request->mikro;
      $tarif->sukubunga = $request->sukubunga;
      $tarif->save();
      return redirect()->route('admin.tarif.index',compact('$tarif'));

    }


    public function show($slug)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();
        if ($request->ajax || $request->wantsjson())  {
          return response('success',200);
        }
        return redirect()->route('admin.tarif.index');
    }
}
