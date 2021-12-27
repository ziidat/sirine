
@extends('layout.app')
@section('tittle', 'Defective Goods')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="row">
          <div class="col-md-12">
          {{-- Jika Privillege Administrator --}}
            @if(Auth::user()->privillege == 'Administrator')
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-9">
                    <h4 class="card-title mb-0" id="textStat" name="textStat"> Statistik Retur PCHT</h4>
                    <div class="small text-muted">Tahun {{ $date->format('Y') }}</div>
                  </div>
                  <div class="col-md-2">
                    {!! Form::label('np','NP/Nama') !!}
                    {!! Form::select('np',$np_nama,null,['class'=>'form-control', 'placeholder'=>'---- Nama ----']) !!}
                  </div>
                  <div class="col-md-1">
                    {!! Form::label('tahun','Tahun') !!}
                    {!! Form::selectYear('year',$date->format('Y'),2018,null,['id'=>'tahun','name'=>'tahun','class'=>'form-control',]) !!} 
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                  <canvas class="chart" id="returSaya" height="300"></canvas>
                </div>
              </div>
            </div>
            @else
            <div class="card">
              <div class="card-header">
                  <h4 class="card-title mb-0"> Statistik Retur {{auth::user()->nama}} PCHT</h4>
                  <div class="small text-muted">Tahun {{ $date->format('Y') }}</div>
              </div>
              <div class="card-body">
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                  <canvas class="chart" id="returSaya" height="300"></canvas>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10" >
                    @if (Auth::user()->privillege == 'Administrator')
                      <h4 class="card-title mb-0" id="textRetInd" name="textRetInd">Jenis Retur</h4>
                    @else
                      <h4 class="card-title mb-0">Jenis Retur {{Auth::user()->nama}} </h4>
                    @endif
                    <div class="small text-muted">Bulan {{ $date->format('F Y') }}</div>
                  </div>
                </div>
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                  <canvas class="chart" id="jenisReturSaya" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    <h4 class="card-title mb-0">Jenis Retur Unit ( PCHT )</h4>
                    <div class="small text-muted">Bulan {{ $date->format('F Y') }}</div>
                  </div>
                </div>
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                  <canvas class="chart" id="jenisReturUnit" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="overflow-x: auto">
                    <div class="card-header">
                        <h4 class="card-tittle" style="text-align: center">Jenis Kerusakan Pita Cukai Hasil Tembakau</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                <tr>
                                    <th>Jenis Kerusakan ( Bahasa Formal )</th>
                                    <th>Jenis Kerusakan ( Bahasa Produksi )</th>
                                    <th>Kode Warna</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hologram (Missing)</td>
                                    <td>Hologram Hilang</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hologram (Scratch)</td>
                                    <td>Hologram Terkelupas</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hologram (Miss Register)</td>
                                    <td>Hologram Bergeser</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Print (Blur Text)</td>
                                    <td>Text Blur</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Print (Blur Image)</td>
                                    <td>Cetakan Dasar Blur</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Print (Ink Smear)</td>
                                    <td>Blobor</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Print (Spot)</td>
                                    <td>Noda</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Print (Under Inking)</td>
                                    <td>Text Dasar Tipis</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Print (Over Inking)</td>
                                    <td>Text Dasar Tebal</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Color (Under Image)</td>
                                    <td>Warna Dasar Tipis</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Color (Over Image)</td>
                                    <td>Warna Dasar Tebal</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Color (Under Text)</td>
                                    <td>Warna Text Tipis</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Color (Over Text)</td>
                                    <td>Warna Text Tebal</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Color (Non Uniform)</td>
                                    <td>Kombinasi Warna Tidak Sesuai</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Color (Incorrect)</td>
                                    <td>Warna Dasar Tidak Sesuai</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Appeareance (Folded)</td>
                                    <td>Terlipat</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Appereance (Plooi)</td>
                                    <td>Flui</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Appereance (Hole)</td>
                                    <td>Bolong</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Appeareance (Tear)</td>
                                    <td>Sobek</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Mixed Product</td>
                                    <td>Tercampur</td>
                                    <td></td>
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
    <script>
      var dataChart = {
                        nama : @json($nama),
                        jenisUnit : @json($jenis_unit),
                        defectUnit : @json($defect_unit),
                        jenisIndividu : @json($jenis_individu),
                        defectIndividu : @json($defect_individu),
                      }
    </script>
    <script>
      $(document).ready(function() {

      $("#np").change(function(){

        var npVal = $('#np').val();
        
        $.ajax ({
          url:"{{ url('stat-defect') }}",
          type :"Get",
          data:{ np:npVal,},
          success:function(data){
            $('#textStat').text("Statistik Retur "+data.nama);
            $('#textRetInd').text("Jenis Retur "+data.nama);
            
          },
        });
      });
    });
    </script>
    <script src="{{ asset('assets') }}/chart/defect.js"></script>
@push('js')
@endpush
@endsection
