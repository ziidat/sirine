@extends('layout.app')
@section('tittle', 'Pesan Evaluasi')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" style="text-align: center">Pesan Evaluasi Pegawai</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-inline">
                <div class="col-md-4">
                  <div class="form-group row">
                    <div class="input-group">
                      <span class="input-group-prepend">
                        <button class="btn btn-success" type="button">
                          <i class="cil-magnifying-glass"></i> Filter
                        </button>
                      </span>
                      <input class="form-control" id="cari_nama" type="text" name="cari_nama" placeholder="NP/Nama">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <input class="form-control" id="tglVerif" oninput="pilihTgl()" type="date">
                      <span class="input-group-prepend">
                        <button class="btn btn-success" type="button">Pilih Tanggal
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <div class="form-group"  style="float: right">
                      <span class="input-group-prepend">
                        <a href="{{ url('formEva') }}"><button class="btn btn-success">Tambah Pesan</button></a>
                      </span>
                    </div>
                </div>
              </div>
              <div class="row" style="margin-top: 20px">
                <table class="table table-responsive-sm table-bordered table-striped">
                  <thead>
                    <tr style="text-align:center">
                      <th>No</th>
                      <th>NP</th>
                      <th>Nama</th>
                      <th>Tanggal Pesan</th>
                      <th>Tanggal Respon</th>
                      <th>Pesan Saya</th>
                      <th>Tanggapan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($evaluation as $data)
                      <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $data->np_pegawai }}</td>
                        <td>{{ $data->$nama }}</td>
                        <td>{{ $data->tgl_cek }}</td>
                        <td>{{ $data->updated_at }}</td>
                        <td>{{ $data->pesan_kasek }}</td>
                        <td>{{ $data->respon_pegawai }}</td>
                        <td>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                              Hapus
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                            Ubah
                          </button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
