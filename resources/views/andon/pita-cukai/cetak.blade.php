@extends('layout.app')
@section('tittle', 'Andon Cetak')
@section('content')


<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
      {{-- Start Table Verif harian --}}
        <div class="row">
          <div class="col-md-12">  
            <div class="carousel slide" id="carouselCetak" data-ride="carousel" data-interval="15000">
              <div class="carousel-inner">
                  @include('andon.pita-cukai.cetak.komori1') {{-- carousel Komori 1 --}}
                  @include('andon.pita-cukai.cetak.komori2') {{-- carousel Komori 2 --}}
                  @include('andon.pita-cukai.cetak.komori3') {{-- carousel Komori 3 --}}
                  @include('andon.pita-cukai.cetak.komori4') {{-- carousel Komori 4 --}}
                  @include('andon.pita-cukai.cetak.ryobi1') {{-- carousel Ryobi 1 --}}
                  @include('andon.pita-cukai.cetak.ryobi2') {{-- carousel Ryobi 2 --}}
                  @include('andon.pita-cukai.cetak.gto') {{-- carousel GTO --}}
                  @include('andon.pita-cukai.cetak.pcht') {{-- carousel PCHT --}}
                  @include('andon.pita-cukai.cetak.mmea') {{-- carousel MMEA & HPTL --}}
              </div>
              <a class="carousel-control-prev" href="#carouselCetak" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselCetak" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div>
      {{-- End Table Verif Harian --}}
      {{-- Start Chart Verif --}}
        <div class="row">
          <div class="col-md-6">
            <div class="card border-warning text-center">
              <div class="card-header bg-warning"><h3>Grafik Pendapatan Harian (PCHT)</h3></div>
              <div class="card-body">
                <div class="c-chart-wrapper">
                  <canvas id="daily_verif"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-warning text-center">
              <div class="card-header bg-warning"><h3>Grafik Inschiet Harian</h3></div>
              <div class="card-body">
                <div class="c-chart-wrapper">
                  <canvas id="daily_inschiet"></canvas>
                </div>
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
  $(document).ready(function(){
    setTimeout(function(){
      location.reload();
    },60000);
  })
</script>
<script>
</script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
<script src="{{ asset('assets') }}/chart/andon/verifikasi.js"></script>

@endsection
