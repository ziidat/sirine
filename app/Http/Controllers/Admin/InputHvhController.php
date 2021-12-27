<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use \App\Models\profile;
use \App\Models\verifikasi;

class InputHvhController extends Controller
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

        $datahvh = profile::all();
        $hvh = verifikasi::all();


        if(auth::user()->privillege == "Administrator")
        {
            return view('menu.admin.verifikasi.input-verifikasi',['datahvh' => $datahvh, 'hvh'=>$hvh],compact('datahvh','hvh'));
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
    public function create(Request $request)
    {
       
        //dd($modelTgl);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $np = $request->np;
        $nama = $request->nama;
        $tglVerif = $request->tgl_verif;
        $jmlRim = $request->jml_rim;
        $lembur = $request->lembur;
        $keterangan = $request->keterangan;

       for($i=0 ; $i < count($np) ; $i++){
       verifikasi::updateOrCreate(
           [ 'np_user' => $np[$i], 'tgl_verif'  => $tglVerif[$i]],
           [
           'np_nama'    => $nama[$i],
           'jml_rim'    => $jmlRim[$i],
           'lembur'     => $lembur[$i],
           'keterangan' => $keterangan[$i],
       ]);
           }


        return redirect('input-verifikasi')->with('pesan','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
