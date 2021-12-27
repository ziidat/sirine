@extends('layout.app')
@section('tittle','Data Kelolosan Pita Cukai')
@section('content')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="card">
                    <div class="card-header">
                      <h3 style="text-align: center">Data Verifikasi Pita Cukai</h3>
                    </div>
                    <div class="card-body" style="overflow-x: auto">
                      <div class="row">
                        <div class="col-md-2 ">
                          <div class="dataTables_length" >
                            <label for="list">Tampilkan : 
                            <select id="range" name="range">
                                <option value="15" selected>15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                              </select> entri
                            </label>
                          </div>
                          <div id="datatable_filter">
                            <label  style="float:left;">
                              <input type="search" class="form-control form-control-sm" id="keyword" name="keyword" placeholder="Cari" aria-controls="datatable">
                            </label>
                          </div>  
                        </div>
                        <div class="col-md-4">
                          <h5 style="text-align: center">Dari Tanggal</h4>
                          {!! Form::date('date',null,['class' => 'form-control','placeholder'=>'-- Dari Tanggal --','name'=>'startDate', 'id' => 'startDate  ']) !!}
                        </div>
                        <div class="col-md-4">
                          <h5 style="text-align: center">Sampai Tanggal</h4>
                          {!! Form::date('date',null,['class' => 'form-control','placeholder'=>'-- Sampai Tanggal --','name'=>'endDate', 'id' => 'endDate  ']) !!}
                        </div>
                        <div class="col-md-2">
                          <div class="form-group" style="margin-left: 10%; margin-top:10%">
                            <span class="input-group-prepend">
                              <button class="btn btn-info" type="submit">Simpan</button>
                            </span>
                          </div>
                        </div>
                      </div>
                      {{-- Session Untuk Alert Hapus User --}}
                      @if(\Session::has('notif'))
                          <div class="row" style="margin-top: 10px">
                            <div class="col-md-12">
                              <div class="alert alert-success" style="text-align: center" role="alert">Data Berhasil Di Hapus</div>
                            </div>
                          </div>
                      @endif
                      {{-- End Session Untuk Alert Hapus User --}}
                      <div class="row" style="margin-top: 20px" >
                        <div id="data-verif" name = "data-verif">
                          @include('layout.table.data-verifikasi')
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
@section('scriptchrt')
<script src="{{ asset('assets') }}/js/plugins/jquery-3.5.1.js"></script>
@push('js')
<script>
  $(document).ready(function() {

    $('#range').change(function(){

      var pagination = $('#range').val();

      $.ajax({
            url:'{{ route("data-verifikasi.index") }}?page=',
            type :"Get",
            datatype : "Json",
            data:{ range:pagination},
            success:function(data){
              $('#data-verif').html(data);
            },
          });
    });
  });
</script>  
@endpush
@endsection