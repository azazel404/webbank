<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class SimulasiController extends Controller
{


    public function create()
    {
        return view('frontend.simulasi.form');
    }

    public function store(Request $request){

    $jenis =  $request->jenis_bunga;
    $plafond = $request->plafond_kredit;
    $waktu = $request->jangka_waktu;
    $bunga = $request->suku_bunga;
    $tglcair = $request->tgl_cair;

      //untuk hitung total cicilan
      $total_cicilan = ($plafond * ($bunga/100)) + $plafond;
      //untuk hitung total bunga
      $total_bunga   = $plafond * ($bunga/100);

      //untuk hitung cicilan perbulan setahun
      $cicilanbulan  = $total_cicilan / $waktu;

      //untuk hitung bunga perbulan setahun
      $bungaperbulan = $total_bunga / $waktu;
      //hitung bagian table jumlah cicilan
      $jumlahCicilan = round($plafond / $waktu);
      //hitung bagian table cicilan bunga
      $cicilanBunga  = round($bungaperbulan + ($bungaperbulan / 11));
      //hitung smua table total smua cicilan
      $totalcicilansemua = round($jumlahCicilan + $cicilanBunga);

      $output = "";
      $no = 1;

      for ($i=0; $i <= $waktu; $i++) {
          $tgl_cair = strtotime("+$i month", strtotime($tglcair));

            if ($i){
              $plafond -= $cicilanBunga + $jumlahCicilan;
            }else{

            }

            if ($plafond < 0) break;

            $output .= "<tr>";
            $output .= "<td>".$no++."</td>";
            $output .= "<td>".date('Y-m-d',$tgl_cair)."</td>";
            $output .= "<td>".$plafond."</td>";

            if ($i){
              "<td>".$totalcicilansemua."</td>";
            }else{
              $output .= "<td>".$jumlahCicilan."</td>";
            }

            if ($i){
              $output .= "<td>".$cicilanBunga."</td>";
            }else{
              $output .= "<td>0</td>";
            }

            $output .= "<td>".$totalcicilansemua."</td>";
            $output .= "</tr>";
            }
      return view('frontend.simulasi.success', $output);
    }
}
