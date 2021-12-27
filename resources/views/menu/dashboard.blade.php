@extends('layout.app')
@section('tittle', 'Dashboard')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in"> 
        {{-- Start Data Untuk Perbandingan Verifikasi & Defect --}}
        @if (Auth::user()->privillege == "Administrator")
          @include('layout.dashboard.admin-chart')
        @else
          @include('layout.dashboard.user-chart')
        @endif
        {{-- End Data Untuk Perbandingan Verifikasi & Defect --}}
      </div>
    </div>
  </main>      
</div>      
@endsection

@section('scriptchrt')
    <script>
      var dataChart = {
        AkmLolosIndividu : @json($dataDefectIndividu),
        AkmLolosUnit : @json($dataDefectUnit),
        statDefect : @json($statDefect),
        statHvh : @json($statHvh),
        statPCHTAdm : @json($statPCHTAdm),
        HvhBulananUnit : @json($dataBulananVerif),
        HvhBulananIndividu : @json($dataBulananVerifInd),
        NamaUser : @json($nama),
      }
    </script>
@push('js')

<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>

@if(Auth::user()->privillege == "User")
  <script src="{{ asset('assets') }}/chart/dashboard_user.js"></script> 
@else
  <script src="{{ asset('assets') }}/chart/dashboard_adm.js"></script>
@endif
@endpush
@endsection
