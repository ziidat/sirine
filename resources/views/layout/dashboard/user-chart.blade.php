{{-- Start Grafik Verifikasi Pegawai --}}
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-8">
        <h4 class="card-title mb-0"> Data Verifikasi {{Auth::user()->nama}}</h4>
        <div class="small text-muted">Bulan {{ $dateNow->format('F Y') }}</div>
      </div>
    </div>
    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
      <canvas class="chart" id="kinerjaUser" height="300"></canvas>
    </div>
  </div>
  <div class="card-footer">
    <div class="row text-center">
      <div class="col-sm-12 col-md mb-sm-2 mb-0">
        <div class="text-muted">Jumlah Verifikasi {{Auth::user()->nama}}</div>
          <strong>{{ $sumHvhInd }} Lembar ({{ $percentageHvhInd }}%)</strong>
          <div class="progress progress-xs mt-2">
            <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percentageHvhInd }}%" aria-valuenow="{{ $percentageHvhInd }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <div class="col-sm-12 col-md mb-sm-2 mb-0">
        <div class="text-muted">Jumlah Verifikasi Unit</div>
        <strong>{{ $sumHvhUnitAll }} Lembar ({{ $percentageHvhUnt }}%)</strong>
        <div class="progress progress-xs mt-2">
          <div class="progress-bar bg-info" role="progressbar" style="width: {{ $percentageHvhUnt }}%" aria-valuenow="{{ $percentageHvhUnt }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Grafik Verifikasi Pegawai --}}
{{-- Start Grafik Retur Pegawai --}}
<div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-8">
          <h4 class="card-title mb-0"> Data Retur {{ Auth::user()->nama }}</h4>
          <div class="small text-muted">Bulan {{ $dateNow->format('F Y') }}</div>
        </div>
      </div>
      <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
        <canvas class="chart" id="kinerjaUnit" height="300"></canvas>
      </div>
    </div>
    <div class="card-footer">
      <div class="row text-center">
        <div class="col-sm-12 col-md mb-sm-2 mb-0">
          <div class="text-muted">Jumlah Retur {{Auth::user()->nama}}</div>
            <strong>{{ $sumAkmIndividu }} Lembar ({{ $percentageRetur }}%)</strong>
          <div class="progress progress-xs mt-2">
            <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $percentageRetur }}%" aria-valuenow="{{ $percentageRetur }}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-sm-12 col-md mb-sm-2 mb-0">
          <div class="text-muted">Jumlah Retur PCHT Unit</div>
            <strong>{{ $sumReturUnit }} Lembar ({{ $percentageReturUnt }}%)</strong>
          <div class="progress progress-xs mt-2">
            <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $percentageReturUnt }}%" aria-valuenow="{{ $percentageReturUnt }}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
</div>
{{-- End Grafik Kelolosan Pegawai --}}
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <h4 class="card-title mb-0">Statistik Verifikasi (PCHT) {{Auth::user()->nama}}</h4>
            <div class="small text-muted">Tahun {{ $dateNow->format('Y') }}</div>
          </div>
        </div>
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="statVerif" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-10">
            <h4 class="card-title mb-0">Statistik Retur Unit Pita Cukai</h4>
            <div class="small text-muted">Tahun {{ $dateNow->format('Y') }}</div>
          </div>
        </div>
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="statRetur" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>