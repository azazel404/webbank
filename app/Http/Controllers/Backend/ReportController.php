<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Report;
use DB;
use Notify;

class ReportController extends Controller
{

    public function index()
    {

        return view('backend.laporan.index');
    }

    public function ajax(Request $request)
    {
      $data = Report::query();
      return Datatables::of($data)
                ->addColumn('action', function ($model) {
                    $str = '<div class="btn-group btn-group-circle">';
                    $str .= '<a href='. route('adminreport.edit', ['report' => $model->id]) .' class="btn btn-outline-blue btn-sm"><span class="far fa-edit"></span> Edit</a>';
                    $str .= '<a data-url="'. route('adminreport.delete', ['report' => $model->id]) .'" id="btnDelete" data-id="'.$model->id.'" data-toggle="modal"  data-table-name="#report-table" class="btn btn-outline-red btn-sm"><span class="far fa-trash-alt"></span> Delete</a>';
                    $str .= '</div>';
                    return $str;
                })
                ->escapeColumns([])
        ->make(true);
    }

    public function create(Report $report){
      return view('backend.laporan.create',compact('report'));
    }

    public function store(Request $request){

        $request->validate([
          'laporan' => 'required|mimes:doc,docx,pdf',
          'description' => 'required',
          'tahun' => 'required',
          'tipe_laporan' => 'required'
        ]);

        $report = new Report;
        $laporan = time().".".$request->laporan->getClientOriginalExtension();
        $report->laporan = $laporan;
        $report->description = $request->description;
        $report->nama_laporan = $request->nama_laporan;
        $report->tipe_laporan = $request->tipe_laporan;
        $report->tahun = $request->tahun;
        $request->laporan->move(public_path('img/laporan'), $laporan);
        $report->save();
        Notify::success('The Data has been created','success');
        return redirect()->route('adminreport.index');

    }

    public function edit(Report $report){
      return view('backend.laporan.edit',compact('report'));
    }

    public function update(Request $request,$id)
    {
         $report = Report::find($id);

        if (isset($request->laporan)) {
            $laporan = time().".".$request->laporan->getClientOriginalExtension();
            $report->laporan = $laporan;
            $request->laporan->move(public_path('img/laporan'), $laporan);
        }

        $report->description = $request->description;
        $report->nama_laporan = $request->nama_laporan;
        $report->tipe_laporan = $request->tipe_laporan;
        $report->tahun = $request->tahun;
        $report->save();
        Notify::success('The Data has been edited','success');
        return redirect()->intended(route('adminreport.index'));
    }


    public function destroy(Request $request)
    {
       $report = Report::find($request->id);
       $report->delete();
       Notify::success('The Data has been deleted','success');
       return redirect()->route('adminreport.index');
    }
}
