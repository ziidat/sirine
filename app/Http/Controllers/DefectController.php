<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\defect;
use App\Models\profile;
use Carbon\Carbon;
use Auth;

class DefectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = Auth::user()->privillege;

        if($auth == 'Administrator')
        {
            $defect = defect::all();

            return view('menu.admin.defect.data-defect',['defect'=>$defect]);

        }
        else
        {
            return abort(404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auth = Auth::user()->privillege;

        if($auth == 'Administrator')
        {
            $defect = defect::find($id);

            return view('menu.admin.defect.detail-defect',['defect'=>$defect]);

        }
        else
        {
            return abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Auth::user()->privillege;

        if($role == 'Administrator')
        {
            
        }
        else
        {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Auth::user()->privillege;

        if($role == 'Administrator')
        {
            $deleteDefect = defect::findorfail($id);
            $deleteDefect->delete();

            return redirect('defect')->with('notif','Data Kelolosan Berhasil di Hapus');
        }
        else
        {
            return abort(404);
        }
    }

    
    //** Function Untuk Data Kelolosan User */
    public function stat_defect(Request $request)
    {
        $user = Auth::user()->np;
        $nama = Auth::user()->nama;
        $np_nama = profile::all()
                    ->sortBy('nama')
                    ->pluck('nama','np_user');

        $date = Carbon::now();
        $defect_now  = defect::whereMonth('tgl_cek','=',Carbon::now());

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

        $defect_unit = [
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

        $defect_individu = [
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
        
        $jenis_unit = [
                        $defect_now->sum('holoMiss'),
                        $defect_now->sum('holoScratch'),
                        $defect_now->sum('holoReg'),
                        $defect_now->sum('printBlurTxt'),
                        $defect_now->sum('printBlurImg'),
                        $defect_now->sum('printSmear'),
                        $defect_now->sum('printSpot'),
                        $defect_now->sum('printUnder'),
                        $defect_now->sum('printOver'),
                        $defect_now->sum('colorUnderImg'),
                        $defect_now->sum('colorOverImg'),
                        $defect_now->sum('colorUnderTxt'),
                        $defect_now->sum('colorOverTxt'),
                        $defect_now->sum('colorNonUniform'),
                        $defect_now->sum('colorIncorrect'),
                        $defect_now->sum('cuttingMiss'),
                        $defect_now->sum('appearanceTear'),
                        $defect_now->sum('appearanceFolded'),
                        $defect_now->sum('appearancePlooi'),
                        $defect_now->sum('appearanceHole'),
                        $defect_now->sum('mixedProduct'),
                      ];

        $jenis_individu = [
                                $defect_now->where('np_user','=',$user)->sum('holoMiss'),
                                $defect_now->where('np_user','=',$user)->sum('holoScratch'),
                                $defect_now->where('np_user','=',$user)->sum('holoReg'),
                                $defect_now->where('np_user','=',$user)->sum('printBlurTxt'),
                                $defect_now->where('np_user','=',$user)->sum('printBlurImg'),
                                $defect_now->where('np_user','=',$user)->sum('printSmear'),
                                $defect_now->where('np_user','=',$user)->sum('printSpot'),
                                $defect_now->where('np_user','=',$user)->sum('printUnder'),
                                $defect_now->where('np_user','=',$user)->sum('printOver'),
                                $defect_now->where('np_user','=',$user)->sum('colorUnderImg'),
                                $defect_now->where('np_user','=',$user)->sum('colorOverImg'),
                                $defect_now->where('np_user','=',$user)->sum('colorUnderTxt'),
                                $defect_now->where('np_user','=',$user)->sum('colorOverTxt'),
                                $defect_now->where('np_user','=',$user)->sum('colorNonUniform'),
                                $defect_now->where('np_user','=',$user)->sum('colorIncorrect'),
                                $defect_now->where('np_user','=',$user)->sum('cuttingMiss'),
                                $defect_now->where('np_user','=',$user)->sum('appearanceTear'),
                                $defect_now->where('np_user','=',$user)->sum('appearanceFolded'),
                                $defect_now->where('np_user','=',$user)->sum('appearancePlooi'),
                                $defect_now->where('np_user','=',$user)->sum('appearanceHole'),
                                $defect_now->where('np_user','=',$user)->sum('mixedProduct'),
                            ];
        
        if(request()->ajax())
         {
            if(!empty($request->np))
            {
                $nama = profile::where('np_user','=',$request->np)->pluck('nama');
            }
            else
            {
                $nama = profile::where('np_user','=',$request->np)->pluck('nama');
            }
        
            return response()->json(['nama'=>$nama,]);
         }
    
        // dd($jenis_individu);

        return view('menu.performance.info-retur',[
                                                    'nama'=>$nama,
                                                    'date'=>$date,
                                                    'np_nama'=>$np_nama,
                                                    'defect_unit'=>$defect_unit,
                                                    'defect_individu'=>$defect_individu,
                                                    'jenis_unit'=>$jenis_unit,
                                                    'jenis_individu'=>$jenis_individu,
                                                  ]);
    }
}
