<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class SimulasiController extends Controller
{


    public function create()
    {
        $simulasi = DB::table('posts')->select('category')->paginate(5);
        return view('frontend.simulasi.form',compact('simulasi'));
    }

    public function store(Request $request){

        $jenis =  $request->jenis_bunga;
        $plafond = $request->plafond_kredit;
        $waktu = $request->jangka_waktu;
        $bunga = $request->suku_bunga;
        $tglcair = $request->input('tglcair');

        //untuk hitung total cicilan
        $total_cicilan = ($plafond * ($bunga/100)) + $plafond;
        //untuk hitung total bunga
        $total_bunga   = $plafond * ($bunga/100);

        //untuk hitung cicilan perbulan setahun
        $cicilanbulan  = ($total_cicilan / $waktu);
        //untuk hitung bunga perbulan setahun
        $bungaperbulan = $total_bunga / $waktu;
        //hitung bagian table jumlah cicilan
        $jumlahCicilan = round($plafond / $waktu);
        //hitung bagian table cicilan bunga
        $cicilanBunga  = round($bungaperbulan + ($bungaperbulan / 11));
        $cicilandata = round($cicilanbulan - $bungaperbulan);
        //hitung smua table total smua cicilan
        $totalcicilansemua = round($jumlahCicilan + $cicilanBunga);


        if($request->jenis_bunga === 'Flat In Area'){
          $output = "";
          $no = 1;
        //$output .="<tr><td>waktunya ". $waktu ." bulan </td></tr>";
      //for ($i=0; $i < $waktu; $i++) {
      $plafond = $total_cicilan;
      $cicilanBunga = $bungaperbulan;
      $totalCicilan = $cicilanbulan + $cicilanBunga;
      $i=0;

        do{
          $tgl_cair = strtotime("+$i month", strtotime($tglcair));

            //if($i)

            //$plafond -= $cicilanBunga + $jumlahCicilan;
            $plafond -= $cicilanbulan;
            // if ($plafond < 0){
            //   $jumlahCicilan += abs($plafond);
            //   $plafond = 0;
            // }

            $output .= "<tr>";
            $output .= "<td>".$no++." ini</td>";
            $output .= "<td>".date('Y-m-d',$tgl_cair)."</td>";
            $output .= "<td>".number_format($plafond,2)."</td>";
            // $output .= "<td>".number_format($jumlahCicilan,2)."</td>";
            $output .= "<td>".number_format($cicilanbulan - $cicilanBunga,2)."</td>";
            //if($i){
            $output .= "<td>".number_format($cicilanBunga,2)."</td>";
            // }else{
            // $output .= "<td>0</td>";
            // }
            //$output .= "<td>".number_format($totalcicilansemua,2)."</td>";
            $output .= "<td>".number_format($cicilanbulan, 2)."</td>";
            $output .= "</tr>";
            $i++;
      }
      while($plafond > 0);

        }
        elseif ($request->jenis_bunga === 'Flat In Advanced') {

                          $output = "";
                          $no = 1;
                        //$output .="<tr><td>waktunya ". $waktu ." bulan </td></tr>";
                      //for ($i=0; $i < $waktu; $i++) {
                      $plafond = $total_cicilan;
                      $cicilanBunga = $bungaperbulan;
                      $totalCicilan = $cicilanbulan + $cicilanBunga;
                      $i=0;

                        do{
                          $tgl_cair = strtotime("+$i month", strtotime($tglcair));

                            //if($i)

                            //$plafond -= $cicilanBunga + $jumlahCicilan;
                            $plafond -= $cicilanbulan;
                            // if ($plafond < 0){
                            //   $jumlahCicilan += abs($plafond);
                            //   $plafond = 0;
                            // }

                            $output .= "<tr>";
                            $output .= "<td>".$no++." ini</td>";
                            $output .= "<td>".date('Y-m-d',$tgl_cair)."</td>";
                            $output .= "<td>".number_format($plafond,2)."</td>";
                            // $output .= "<td>".number_format($jumlahCicilan,2)."</td>";
                            $output .= "<td>".number_format($cicilanbulan - $cicilanBunga,2)."</td>";
                            //if($i){
                            $output .= "<td>".number_format($cicilanBunga,2)."</td>";
                            // }else{
                            // $output .= "<td>0</td>";
                            // }
                            //$output .= "<td>".number_format($totalcicilansemua,2)."</td>";
                            $output .= "<td>".number_format($cicilanbulan, 2)."</td>";
                            $output .= "</tr>";
                            $i++;
                      }
                      while($plafond > 0);

        }

              return view('frontend.simulasi.success')->with([
                  'jenis' => $jenis,
                  'bunga' => $bunga,
                  'tglcair' => $tglcair,
                  'total_cicilan' => $total_cicilan,
                  'total_bunga' => $total_bunga,
                  'cicilanbulan' => $cicilanbulan,
                  'bungaperbulan' => $bungaperbulan,
                  'output' => $output
              ]);
          }
}
