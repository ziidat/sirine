@extends('layout.app')
@section('tittle', 'Create User')

@section('content')
<div class="c-body">
    <main  class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="margin-left: 10px; margin-right: 10px;">
                            <div class="card-header">
                                <h5 class="title" style="text-align: center">{{__("Profile User")}}</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{route('manage-user.store')}}" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Nama")}}</label>
                                                <input type="text" name="nama" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" NP")}}</label>
                                                <input type="text" name="np" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Unit")}}</label>
                                            <select class="form-control" name="unit" required>
                                                <option value="Verifikasi Pita Cukai">Verifikasi Pita Cukai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Bagian")}}</label>
                                            <select class="form-control" name="bagian" required>
                                                <option value="Verifikasi PCHT">Verifikasi PCHT</option>
                                                <option value="Verifikasi MMEA">Verifikasi MMEA</option>
                                                <option value="Operator Mesin Inspeksi">Operator Mesin Inspeksi</option>
                                                <option value="Kepala Unit Verifikasi Pita Cukai">Kepala Unit Verpikai</option>
                                                <option value="Kepala Seksi Verifikasi Tasganu">Kepala Seksi Verifikasi</option>
                                                <option value="Assisten Kepala Meja">Asisstan Kepala Meja</option>
                                                <option value="Kepala Meja">Kepala Meja</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Tgl Lahir")}}</label>
                                                <input type="date" name="tglLahir" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" E-mail")}}</label>
                                                <input type="text" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Alamat")}}</label>
                                            <textarea name="alamat"class="form-control" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" No.Hp / WA")}}</label>
                                                <input type="text" name="contact" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-primary btn-round">{{__('Simpan')}}</button>
                                </div>
                                <hr class="half-rule"/>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title" style="text-align: center">{{__("Password & Privillege")}}</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Privillege ")}}</label>
                                            <select class="form-control" name="role" required>
                                                <option value="Administrator">Administrator</option>
                                                <option value="User">User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Password  ")}}</label>
                                                <input type="password" name="password" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>{{__(" Konfirmasi Password  ")}}</label>
                                                <input type="password" name="konfirmasi_password" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
