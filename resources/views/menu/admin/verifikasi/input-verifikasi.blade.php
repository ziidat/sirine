@extends('layout.app')
@section('tittle', 'Input Data Verifikasi Harian')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title" style="text-align: center">Input Pendapatan Harian Pita Cukai</h4>
          </div>
          <div class="card-body" style="overflow-x: auto">
            <form method="post" action="{{route ('input-verifikasi.store')}}">
              @csrf 
              <div class="row form-inline">
                <div class="col-md-4">
                  <div class="form-group">
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
                      <input class="form-control" id="tglVerif" oninput="pilihTgl()" type="date" value="">
                      <span class="input-group-prepend">
                        <button class="btn btn-success" type="button">Pilih Tanggal
                        </button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-3">
                  <div class="form-group" style="float: right">
                    <span class="input-group-prepend">
                      <button class="btn btn-primary" type="submit">Simpan</button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 20px">
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                  <thead>
                    <tr style="text-align:center">
                      <th>No</th>
                      <th>NP</th>
                      <th>Nama</th>
                      <th>Jumlah Verifikasi</th>
                      <th>Lembur</th>
                      <th>Keterangan</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($datahvh as $data)
                    <tr>
                      <td style="text-align: center;width:5%" scope="row">{{$loop->iteration}}</td>
                      <input type="hidden" name="tgl_verif[]" class="tglVerifInp">
                      <td style="text-align: center;width:10%">
                          {{$data->np_user}}
                          <input type="hidden" name="np[]" value="{{$data->np_user}}">
                      </td>
                      <td style="text-align:left; width:20%">
                          {{$data->nama}}
                          <input type="hidden" name="nama[]" value="{{$data->nama}}">
                      </td>
                      <td style="text-align: center;width:5%">
                          <input type="number" name="jml_rim[]" class="form-control" style="width:auto ; text-align:right" min="0" value="0">
                      </td>
                      <td style="text-align: center;width:7%">
                        <select class="form-control" name="lembur[]" style="text-align: center;">
                            <option value="-">-</option>
                            <option value="Awal">Awal</option>
                            <option value="Akhir">Akhir</option>
                            <option value="Awal Akhir">Awal Akhir</option>
                          </select>
                      </td>
                      <td style="text-align: center;width:20%">
                          <input type="text" name="keterangan[]" class="form-control" placeholder  ="-">
                      </td>
                      <td style="text-align: center;width:20%">
                          <input type="text" name="keterangan[]" class="form-control" placeholder  ="-">
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
@section('script-js')

@if(\Session::has('pesan'))
@include('layout.modal.hvh-success')
  <script>
    $(function() {
        $('#success-modal').modal('show');
    });
    </script>
@endif
@endsection
@push('js')
<script>
        function pilihTgl(){

        var tglVerif = document.getElementById("tglVerif").value;
        var valueTgl = document.getElementsByClassName("tglVerifInp");
        var i;
        for (i = 0; i < valueTgl.length; i++){

            valueTgl[i].value = tglVerif;}

        }
</script>
@endpush
