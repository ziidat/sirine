<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\verifikasi;
use App\Models\pcht;
use Auth;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->np;
        $nama = Auth::user()->nama;
        $lolosAll = defect::all();
        $date = Carbon::today()->subYears(1);
        $dateNow = Carbon::now();
        
        $sumAkmIndividu = defect::where('np_user',$user) 
                            ->sum(DB::raw('holoMiss + holoScratch + holoReg + printBlurTxt + printBlurImg + printSmear + printSpot + printUnder + printOver + colorUnderImg + colorOverImg + colorUnderTxt + colorOverTxt + colorNonUniform + colorIncorrect + cuttingMiss + appearanceTear + appearanceFolded + appearancePlooi + appearanceHole + mixedProduct'));

        $sumHvhInd = verifikasi::where('np_user',$user)
                    ->sum('jml_rim')*500    ;

        $sumHvhUnitAll = pcht::where('tgl_verifikasi','=',$dateNow)
                        ->sum('rencet');

        $sumReturUnit = defect::where('tgl_cek','>=',Carbon::today()->subYears(1))
                            ->sum(DB::raw('holoMiss + holoScratch + holoReg + printBlurTxt + printBlurImg + printSmear + printSpot + printUnder + printOver + colorUnderImg + colorOverImg + colorUnderTxt + colorOverTxt + colorNonUniform + colorIncorrect + cuttingMiss + appearanceTear + appearanceFolded + appearancePlooi + appearanceHole + mixedProduct'));
 
        $statDefect = [$sumAkmIndividu,$sumReturUnit];
        $statHvh = [$sumHvhInd,$sumHvhUnitAll];
        $statPchtAdm = [$sumHvhUnitAll,$sumReturUnit];
        $sumRencet = pcht::whereMonth('tgl_obc','=',$dateNow)->sum('rencet');

        if(Auth::user()->privillege == 'Administrator')
        {  
            if($sumReturUnit > 0 && $sumHvhUnitAll > 0)
                {
                    $percentageReturUnt = $sumReturUnit / $sumHvhUnitAll * 100;
                }
            else
                {
                    $percentageReturUnt = 0;
                };
            $percentageHvhUnt =   100;
            $percentageRetur = 100;
            $percentageHvhInd =  0;
        }
        else
        {
            if($sumAkmIndividu > 0 && $sumHvhInd > 0)
            {
               $percentageRetur =  $sumAkmIndividu / $sumReturUnit * 100;
               $percentageHvhInd =  $sumHvhInd / $sumHvhUnitAll  * 100;
               $percentageReturUnt = 100;
               $percentageHvhUnt =   100;
            }
            else
            {
               $percentageRetur =  0;
               $percentageHvhInd =  0;
               $percentageReturUnt =  0;
               $percentageHvhUnt =   0;
            }
        }
        
        //** Variable Bulan Untuk Data Chart Verifikasi Harian */

        $jan_verif    = pcht::whereMonth('tgl_verifikasi','=',1);
        $feb_verif    = pcht::whereMonth('tgl_verifikasi','=',2);
        $mar_verif    = pcht::whereMonth('tgl_verifikasi','=',3);
        $apr_verif    = pcht::whereMonth('tgl_verifikasi','=',4);
        $mei_verif    = pcht::whereMonth('tgl_verifikasi','=',5);
        $jun_verif    = pcht::whereMonth('tgl_verifikasi','=',6);
        $jul_verif    = pcht::whereMonth('tgl_verifikasi','=',7);
        $agu_verif    = pcht::whereMonth('tgl_verifikasi','=',8);
        $sep_verif    = pcht::whereMonth('tgl_verifikasi','=',9);
        $okt_verif    = pcht::whereMonth('tgl_verifikasi','=',10);
        $nov_verif    = pcht::whereMonth('tgl_verifikasi','=',11);
        $des_verif    = pcht::whereMonth('tgl_verifikasi','=',12);
        
        //** Variable Bulan Untuk Data Chart Verifikasi Harian */

        $jan_defect    = defect::whereMonth('tgl_cek','=',1);
        $feb_defect    = defect::whereMonth('tgl_cek','=',2);
        $mar_defect    = defect::whereMonth('tgl_cek','=',3);
        $apr_defect    = defect::whereMonth('tgl_cek','=',4);
        $mei_defect    = defect::whereMonth('tgl_cek','=',5);
        $jun_defect    = defect::whereMonth('tgl_cek','=',6);
        $jul_defect    = defect::whereMonth('tgl_cek','=',7);
        $agu_defect    = defect::whereMonth('tgl_cek','=',8);
        $sep_defect    = defect::whereMonth('tgl_cek','=',9);
        $okt_defect    = defect::whereMonth('tgl_cek','=',10);
        $nov_defect    = defect::whereMonth('tgl_cek','=',11);
        $des_defect    = defect::whereMonth('tgl_cek','=',12);

        //** Data Untuk Chart Bulanan Verif Unit */
        $dataBulananVerif = [
                                $jan_verif->sum('rencet'),
                                $feb_verif->sum('rencet'),
                                $mar_verif->sum('rencet'),
                                $apr_verif->sum('rencet'),
                                $mei_verif->sum('rencet'),
                                $jun_verif->sum('rencet'),
                                $jul_verif->sum('rencet'),
                                $agu_verif->sum('rencet'),
                                $sep_verif->sum('rencet'),
                                $okt_verif->sum('rencet'),
                                $nov_verif->sum('rencet'),
                                $des_verif->sum('rencet')
                            ];

        //** Data Untuk Chart Bulanan Verif Individu */
        $dataBulananVerifInd = [
                                verifikasi::whereMonth('tgl_verif','=',1)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',2)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',3)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',4)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',5)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',6)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',7)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',8)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',9)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',10)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',11)->where('np_user','=',$user)->sum('jml_rim')*500,
                                verifikasi::whereMonth('tgl_verif','=',12)->where('np_user','=',$user)->sum('jml_rim')*500
                            ];
        

        //** Data Untuk Chart Kelolosan Bulanan Unit */
        
        $dataDefectUnit = [
                            $jan_defect->sum('total_retur'),
                            $feb_defect->sum('total_retur'),
                            $mar_defect->sum('total_retur'),
                            $apr_defect->sum('total_retur'),
                            $mei_defect->sum('total_retur'),
                            $jun_defect->sum('total_retur'),
                            $jul_defect->sum('total_retur'),
                            $agu_defect->sum('total_retur'),
                            $sep_defect->sum('total_retur'),
                            $okt_defect->sum('total_retur'),
                            $nov_defect->sum('total_retur'),
                            $des_defect->sum('total_retur'),
                          ];

        //** Data Untuk Chart Kelolosan Bulanan Individu */
        
        $dataDefectIndividu = [
                            $jan_defect->where('np_user','=',$user)->sum('total_retur'),
                            $feb_defect->where('np_user','=',$user)->sum('total_retur'),
                            $mar_defect->where('np_user','=',$user)->sum('total_retur'),
                            $apr_defect->where('np_user','=',$user)->sum('total_retur'),
                            $mei_defect->where('np_user','=',$user)->sum('total_retur'),
                            $jun_defect->where('np_user','=',$user)->sum('total_retur'),
                            $jul_defect->where('np_user','=',$user)->sum('total_retur'),
                            $agu_defect->where('np_user','=',$user)->sum('total_retur'),
                            $sep_defect->where('np_user','=',$user)->sum('total_retur'),
                            $okt_defect->where('np_user','=',$user)->sum('total_retur'),
                            $nov_defect->where('np_user','=',$user)->sum('total_retur'),
                            $des_defect->where('np_user','=',$user)->sum('total_retur'),
                          ];


        //   dd($sumRencet);

        return view('menu.dashboard',[
                                    'nama'=>$nama,
                                    'dateNow'=>$dateNow,
                                    'statHvh'=>$statHvh,
                                    'sumRencet'=>$sumRencet,
                                    'sumHvhInd'=>$sumHvhInd,
                                    'statDefect'=>$statDefect,
                                    'statPCHTAdm'=>$statPchtAdm,
                                    'sumReturUnit'=>$sumReturUnit,
                                    'sumHvhUnitAll'=>$sumHvhUnitAll,
                                    'sumAkmIndividu'=>$sumAkmIndividu,
                                    'dataDefectUnit'=>$dataDefectUnit,
                                    'percentageRetur'=>$percentageRetur,
                                    'percentageHvhUnt'=>$percentageHvhUnt,
                                    'percentageHvhInd'=>$percentageHvhInd,
                                    'dataBulananVerif'=>$dataBulananVerif,
                                    'dataDefectIndividu'=>$dataDefectIndividu,
                                    'percentageReturUnt'=>$percentageReturUnt,
                                    'dataBulananVerifInd'=>$dataBulananVerifInd,
                                    compact('user') ]);

    }

    //** Halaman Admin */
    public function adminHome()
    {

    }
}
