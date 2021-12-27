<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use \App\Models\profile;
use \App\Models\verifikasi;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $profile = profile::all();

        if($request->ajax())
        {
            $hvh = verifikasi::simplePaginate($request->range);

            return view('layout.table.data-verifikasi',['profile' => $profile, 'hvh' => $hvh])->render();
        }
        else
        {
            $hvh = verifikasi::simplePaginate($request->range);
        }

        if(Auth::user()->privillege == "Administrator"){
            
            return view('menu.admin.verifikasi.data-verifikasi',['profile' => $profile, 'hvh'=>$hvh]);
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
    public function destroy($hvh)
    {
        $deleteVerifikasi = verifikasi::find($hvh);
        // dd($deleteVerifikasi);
        $deleteVerifikasi->delete();
        return redirect('data-verifikasi')->with('notif', 'User Berhasil Dihapus');
    }
}
