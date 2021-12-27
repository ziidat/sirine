<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Auth;
use \App\Models\profile;
use \App\Models\accounts;

class ManageuserController extends Controller
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
    public function index(Request $request)
    {
        
        
        if(auth::user()->privillege == "Administrator")
        {
            if(request()->ajax())
            {   
                $profile = profile::simplePaginate($request->paginate);  
                return view('menu.admin.manage_user.table-user',['profile' => $profile],compact('profile'));
            }

        $profile = profile::simplePaginate(15);
        return view('menu.admin.manage_user.manage-user',['profile' => $profile],compact('profile'));

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
        if(Auth::user()->privillege == "Administrator")
        {
            return view('menu.admin.manage_user.tambah-user');
        }
        else
        {
            return abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->privillege == "Administrator")
        {
           $request->validate([
               'nama' => 'required',
               'np' => 'required|max:4',
               'unit' => 'required',
               'password' => 'required|min:8',
               'konfirmasi_password' => 'required|same:password',
               'role' => 'required',
               'email' => 'required',
               'bagian' => 'required',
               'tglLahir' => 'required',
           ]);


           accounts::create([
            'np' => $request->np,
            'password' => hash::make($request->password),
            'privillege' => $request->role,
            'nama' => $request->nama,

            ]);
            
            profile::create([
                'nama' => $request->nama,
                'np_user' => $request->np,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'contact' => $request->contact,
                'unit' => $request->unit,
                'sub_bagian' => $request->bagian,
                'tgl_lahir' => $request->tglLahir,
            ]);
        }
        else
        {
            return abort(404);
        }

        return redirect('manage-user')->with('tambah-user','User Brhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $profile = profile::find($id);

        if (Auth::user()->privillege == "Administrator")
        {
            return view('menu.admin.manage_user.edit-user-profile',compact('profile'));
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
        $profile = profile::where('id',$request->varue);

        if (Auth::user()->privillege == "Administrator")
        {
            $profile->update([
            'nama' => $request->nama,
            'np_user' => $request->np,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'contact' => $request->contact,
            'unit' => $request->unit,
            'sub_bagian' => $request->bagian,
            'tgl_lahir' => $request->tgl_lahir,
            ]);
        }
        else
        {
            return abort(404);
        }

        return redirect('manage-user')->with('pesan','User Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($np)
    {
        if(Auth::user()->privillege == "Administrator")
        {
         $deleteAccounts = accounts::find($np);

         $deleteAccounts->delete();
        return redirect('manage-user')->with('notif', 'data Berhasil Dihapus');
        }
        else
        {
            return abort(404);
        }
    }
}
