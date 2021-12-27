{{-- Start Grafik Verifikasi Unit --}}
<div class="row">
  <div class="col-md-12">
    <div class="card border-info text-center">
      <div class="card-header bg-info text-white">
        <h4 class="card-title mb-0"> Data Verifikasi & Retur</h4>
        <div class="medium text-muted">Bulan {{ $dateNow->format('F Y') }}</div>
      </div>
      <div class="card-body">
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="kinerjaUnit" height="300"></canvas>
        </div>
      </div>
      <div class="card-footer">
        <div class="row text-center">
          <div class="col-sm-12 col-md mb-sm-2 mb-0">
            <div class="text-muted">Jumlah Verifikasi Unit (PCHT)</div>
              <strong>{{ number_format($sumHvhUnitAll) }} Lembar ({{ number_format(($sumHvhUnitAll + $sumRencet * 100),2) }}%)</strong>
            <div class="progress progress-xs mt-2">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $sumHvhUnitAll + $sumRencet * 100 }}%" aria-valuenow="{{ $sumHvhUnitAll + $sumRencet * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: {{ 100 - ($sumHvhUnitAll + $sumRencet * 100) }}%" aria-valuenow="{{ 100 - ($sumHvhUnitAll + $sumRencet * 100) }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-sm-12 col-md mb-sm-2 mb-0">
            <div class="text-muted">Jumlah Retur Unit (PCHT)</div>
              <strong>{{ number_format($sumReturUnit) }} Lembar ({{ number_format($percentageReturUnt,5) }}%)</strong>
            <div class="progress progress-xs mt-2">
              <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $percentageReturUnt }}%" aria-valuenow="{{ $percentageReturUnt }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Grafik Verifikasi Unit --}}

<div class="row">
  <div class="col-md-6">
    <div class="card border-success text-center">
      <div class="card-header bg-success text-white">
        <h4 class="card-title mb-0">Statistik Verifikasi Unit Pita Cukai</h4>
        <div class="medium text-muted">Tahun {{ $dateNow->format('Y') }}</div>
      </div>
      <div class="card-body">
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="statVerif" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card border-warning text-center">
      <div class="card-header bg-warning">
        <h4 class="card-title mb-0">Statistik Retur Unit Pita Cukai</h4>
        <div class="medium text-muted">Tahun {{ $dateNow->format('Y') }}</div>
      </div>
      <div class="card-body">
        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
          <canvas class="chart" id="statRetur" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>