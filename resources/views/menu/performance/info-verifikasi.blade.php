@extends('layout.app')
@section('tittle', 'My Performance')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            {{-- Statistik Verifikasi Jika Privillege Admin --}}
              @if(Auth::user()->privillege == "Administrator")
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-2">
                      {!! Form::label('np','NP/Nama') !!}
                      {!! Form::select('np',$np_nama,null,['class'=>'form-control','placeholder'=>'---- Nama / NP ----']) !!}
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4">
                      <h4 style="text-align: center; margin-top: 4%" id="textStat" name="textStat">Statistik Jumlah Verifikasi PCHT Bulan {{ $tanggal->format('F') }}</h4>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-2">
                      {!! Form::label('month','Bulan') !!}
                      {!! Form::selectMonth('month',$tanggal->format('m'),['id'=>'month','name'=>'month','class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-1"> 
                      {!! Form::label('year','Tahun') !!}
                      {!! Form::selectYear('year',$tanggal->format('Y'),2020,null,['id'=>'year','name'=>'year','class'=>'form-control',]) !!} 
                    </div>
                  </div>
                </div>
              @else
            {{-- Statistik Verifikasi Jika Privillege User --}}
                <div class="card-header">
                  <h4 style="text-align: center">Statistik Jumlah Verifikasi PCHT {{ Auth::user()->nama }} Bulan {{ $tanggal->format('F') }}</h4>
                </div>
              @endif
            {{-- End Statistik Verifikasi --}}
              <div class="card-body">
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                  <canvas class="chart" height="300" id="performance" name="performance"></canvas>
                </div>
                <div class="card">
                  <div class="card-header card-accent-info">
                    <h5 style="text-align: center">Data Hasil Verifikasi</h5>
                  </div>
                  <div class="card-body">
                    <div class="row input-datarange">
                      <div class="col-md-6">
                        <input type="date" name="dari_tanggal" id="dari_tanggal" class="form-control" placeholder="Dari Tanggal"  />
                      </div>
                      <div class="col-md-6">
                        <input type="date" name="sampai_tanggal" id="sampai_tanggal" class="form-control" placeholder="Sampai Tanggal"  />
                      </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                      <div class="col-md-6">
                        <button type="button" name="filter" id="filter" class="btn btn-primary">Update</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-success">Refresh</button>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="overflow-x:auto">
                    <table class="table table-responsive-md table-striped" id="jml_verif">
                      <thead>
                        <th>
                          Tanggal
                        </th>
                        <th>
                        Jumlah&nbsp;(RIM)
                        </th>
                        <th>
                          Lembur
                        </th>
                        <th>
                          Target Verifikasi
                        </th>
                        <th>
                            Keterangan
                          </th>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">Statistik Jumlah Hasil Verifikasi {{auth::user()->nama}}</h5>
                <div class="small text-muted">Tahun 2021</div>
              </div>
              <div class="card-body">
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                  <canvas class="chart" id="verifavr" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card" style="text-align: center">
              <div class="card-header">Standar Verifikasi Harian ( Dalam Keadaan Baik )</div>
              <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Jam Kerja</th>
                      <th>Standar Verifikasi (Rim)</th>
                      <th></th>
                      <th>Standar Verifikasi (Lembur)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tidak Lembur</td>
                      <td>30 Rim</td>
                      <td>:</td>
                      <td>15.000 Lembar</td>
                    </tr>
                    <tr>
                      <td>Lembur Awal</td>
                      <td>40 Rim</td>
                      <td>:</td>
                      <td>20.000 Lembar</td>
                    </tr>
                    <tr>
                      <td>Lembur Akhir</td>
                      <td>45 Rim</td>
                      <td>:</td>
                      <td>22.500 Lembar</td>
                    </tr>
                    <tr>
                      <td>Lembur Awal Akhir</td>
                      <td>55 Rim</td>
                      <td>:</td>
                      <td>27.500 Lembar</td>
                    </tr>
                  </tbody>
                </table>
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
  @push('js')
    <script>
    // Variable Data Chart
      var dataChart = {
        DateHvh : @json($tglhvh),
        IndHvhYear : @json($indHvhYear),
        VerifIndividu  : @json($verif_individu),
        TargetIndividu : @json($target_individu)
        }
    
    //** Scrpt Table*/
        $(document).ready(function() {
          $('.input-daterange').datepicker({
            todayBtn:'linked',
            format:'yyyy-mm-dd',
            autoclose:true
        });

      // Update Data Table Verifikasi
        load_data();
      
        function load_data(dari_tanggal = '', sampai_tanggal = '')
        {
          var npVal = $('#np').val();
          var monthVal = $('#month').val();
          var yearVal = $('#year').val();
        
          $('#jml_verif').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url:'{{ route("performance.index") }}',
            data:{dari_tanggal:dari_tanggal, sampai_tanggal:sampai_tanggal,np:npVal,month:monthVal,year:yearVal}
          },
          columns: [
            {
            data:'tgl_verif',
            name:'tgl_verif'
            },
            {
            data:'jml_rim',
            name:'jml_rim'
            },
            {
            data:'lembur',
            name:'lembur'
            },
            {
            data:'target',
            name:'target'
            },
            {
            data:'keterangan',
            name:'keterangan'
            }
          ]
          });
        }

      // Update Data Berdasarkan Tanggal
        $('#filter').click(function(){
          var dari_tanggal = $('#dari_tanggal').val();
          var sampai_tanggal = $('#sampai_tanggal').val();
          if(dari_tanggal != '' &&  sampai_tanggal != '')
          {
          $('#jml_verif').DataTable().destroy();
          load_data(dari_tanggal, sampai_tanggal);
          }
          else
          {
          alert('Tanggal Belum Di isi');
          }
        });
      
      // Update Data Berdasarkan NP
        $("#np").change(function(){

          var npVal = $('#np').val();
          var yearVal = $('#year').val();
          var monthVal = $('#month').val();
          var dari_tanggal = $('#dari_tanggal').val();
          var sampai_tanggal = $('#sampai_tanggal').val();
        
          $('#jml_verif').DataTable().destroy();
          load_data(dari_tanggal, sampai_tanggal);

          $.ajax({
            url:"verif-ind",
            type :"Get",
            datatype : "Json",
            data:{ np:npVal,year:yearVal,month:monthVal},
            success:function(data){
              $('#textStat').text("Statistik Verifikasi "+data.nama+" PCHT Bulan "+monthVal);
            },
          });
        
        });

      // Update Data Berdasarkan Bulan
        $("#month").change(function(){

          var npVal = $('#np').val();
          var yearVal = $('#year').val();
          var monthVal = $('#month').val();
          var dari_tanggal = $('#dari_tanggal').val();
          var sampai_tanggal = $('#sampai_tanggal').val();
        
          $('#jml_verif').DataTable().destroy();
          load_data(dari_tanggal, sampai_tanggal);

          $.ajax({
            url:"verif-ind",
            type :"Get",
            datatype : "Json",
            data:{ np:npVal,year:yearVal,month:monthVal},
            success:function(data){
              $('#textStat').text("Statistik Verifikasi "+data.nama+" PCHT Bulan "+monthVal)
            },
          });
        
        });

      // Update Data Berdasarkan Tahun
        $("#year").change(function(){

          var npVal = $('#np').val();
          var yearVal = $('#year').val();
          var monthVal = $('#month').val();
          var dari_tanggal = $('#dari_tanggal').val();
          var sampai_tanggal = $('#sampai_tanggal').val();
        
          $('#jml_verif').DataTable().destroy();
          load_data(dari_tanggal, sampai_tanggal);

          $.ajax({
            url:"verif-ind",
            type :"Get",
            datatype : "Json",
            data:{ np:npVal,year:yearVal,month:monthVal},
            success:function(data){
              $('#textStat').text("Statistik Verifikasi "+data.nama+" PCHT Bulan "+monthVal)
            },
          });
        
        });
      // Refresh Data dalam Table
        $('#refresh').click(function(){
          $('#dari_tanggal').val('');
          $('#sampai_tanggal').val('');
          $('#jml_verif').DataTable().destroy();
          load_data();
        });
      
      });
    </script>
    <script src="{{ asset('assets') }}/chart/performance.js"></script>
@endpush
@endsection
