<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\verifikasi;
use App\Models\profile;
use App\Models\defect;
use Carbon\Carbon;
use Auth;

class PerformanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // class untuk Halaman Hasil Verifikasi Harian

    public function index(Request $request)
    {
       $user = Auth::user()->np;
       $profile = profile::all();
       $dateYear = Carbon::today()->subYears(1);
       $datechrt = Carbon::today();
       $datahvh = verifikasi::whereMonth('tgl_verif','=',$datechrt);
       $np_nama = $profile
                    ->sortBy('nama')
                    ->pluck('nama','np_user');  
       $collect = $datahvh->avg('jml_rim');

        // $average_verifikasi = [];
        // foreach($datahvh as $datahvh){
        //    $average_verifikasi[] = $datahvh->avg('jml_rim');
        // }
                        
        $dateMonth = verifikasi::where('np_user',$user)
                ->whereMonth('tgl_verif','=',$datechrt)
                ->get()
                ->sortBy('tgl_verif',false);
                        
        $hvhYear = verifikasi::where('np_user',$user)
                ->wheredate('tgl_verif','>=',$dateYear)
                ->get()
                ->sortBy('tgl_verif',false);
                    
        $sumHvhYear = $hvhYear
                        ->groupby(function($d){
                            return Carbon::parse($d->tgl_verif)->format('m');
                        })
                        ->map(function ($row) {
                            return
                            $row->sum('jml_rim');
                        });

        // $verifikasi_individu = $dateMonth
        
        $indHvhYear = [];
        foreach ($sumHvhYear as $verifikasi) {
            $indHvhYear[] = $verifikasi;
        }

        $tglhvh = [];
        foreach($dateMonth as $tgl){
            $tglhvh[] = substr($tgl->tgl_verif,8);
        }

        $verif_individu = [];
        foreach($dateMonth as $verif_ind){
            $verif_individu[] = $verif_ind->jml_rim;
        }

        $target_individu = [];
        foreach($dateMonth as $target){
            $target_individu[] = $verif_ind->target;
        }

        //** Ajax Untuk Performa User Admin */
            if(request()->ajax())
            {
            // ** Funsi Data Table Ajax */
                if(!empty($request->np))
                {
                    if(!empty($request->dari_tanggal))
                    {
                        $data = verifikasi::where('np_user',$request->np)
                                    ->whereBetween('tgl_verif', array($request->dari_tanggal, $request->sampai_tanggal))
                                    ->get();
                    }
                    else
                    {
                        $data = verifikasi::where('np_user',$request->np)
                          ->whereMonth('tgl_verif','=',$request->month)
                          ->whereYear('tgl_verif','=',$request->year)
                          ->get()
                          ->sortBy('tgl_verif',false);
                    }
                }

                else
                {
                    if(!empty($request->dari_tanggal))
                    {
                        $data = verifikasi::where('np_user',$user)
                                    ->whereBetween('tgl_verif', array($request->dari_tanggal, $request->sampai_tanggal))
                                    ->get();
                    }
                    else
                    {
                        $data = verifikasi::where('np_user',$user)
                          ->where('tgl_verif','>=',$request->month)
                          ->get()
                          ->sortBy('tgl_verif',false);
                    }
                }
                
                return datatables($data)->make(true);
               
            }

        // dd($collect);
        return view('menu.performance.info-verifikasi',[
                                                        'profile'=>$profile,
                                                        'tanggal'=>$datechrt,
                                                        'tglhvh' => $tglhvh,
                                                        'np_nama' => $np_nama,
                                                        'indHvhYear'=>$indHvhYear,
                                                        'target_individu'=>$target_individu,
                                                        'verif_individu' => $verif_individu, 
                                                        ], compact('datahvh','profile'));
    }

    public function chart(Request $request)
    {
        if(request()->ajax())
         {
            if(!empty($request->np))
                {
                    $sumMonth = verifikasi::where('np_user',$request->np)
                                    ->whereMonth('tgl_verif','=',$request->month)
                                    ->get()
                                    ->sortBy('tgl_verif',false);    

                    $nama = profile::where('np_user','=',$request->np)->pluck('nama');
                    $verif_individu = [];
                    foreach($sumMonth as $verif_ind)
                    {
                        $verif_individu[] = $verif_ind->jml_rim;
                    }
                }
            else
                {
                    $sumMonth = verifikasi::where('np_user',$request->np)
                                    ->whereMonth('tgl_verif','=',$request->month)
                                    ->get()
                                    ->sortBy('tgl_verif',false);    
                    $nama = profile::where('np_user','=',$request->np)->pluck('nama');  
                    $verif_individu = [];
                    foreach($sumMonth as $verif_ind)
                    {
                        $verif_individu[] = $verif_ind->jml_rim;
                    }
                }
        
        return response()->json(['verif_individu'=>$verif_individu,'sumMonth'=>$sumMonth,'nama'=>$nama,]);
         }
    }

}
