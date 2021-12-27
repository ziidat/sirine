<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <div class="c-sidebar-brand d-lg-down-none">
    <img class="c-sidebar-brand-full" src="{{asset('assets')}}/img/logo.png" width="118" height="46" alt="Sirine Logo" >
  </div>
  <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('home')}}">
        <i class="cil-home c-sidebar-nav-icon"></i>
          Beranda
      </a>
    </li>
    <li class="c-navbar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('Profile')}}">
        <i class="far fa-user c-sidebar-nav-icon"></i>
        Biodata Saya
      </a>
    </li>
    <li class="c-sidebar-nav-title">
          Performa Pegawai
      </a>
      <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ url('performance') }}">
          <span class="cil-chart-line c-sidebar-nav-icon"></span>
            Statistik Verifikasi
        </a>
      </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ url('stat-defect') }}">
            <span class="cil-chart-pie c-sidebar-nav-icon"></span>
              Statistik Retur
          </a>
        </li>
    </li>
    <li class="c-sidebar-nav-title">
          Menu Admin
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ url('manage-user') }}">
            <span class="cil-user-follow c-sidebar-nav-icon"></span>
              Manajemen User
          </a>
        </li>
        <li class="c-sidebar-nav-dropdown">
          <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <span class="cil-color-border  c-sidebar-nav-icon"></span>
            Verifikasi Pita Cukai
          </a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
              <a class="c-sidebar-nav-link" href="{{ url('input-verifikasi') }}">
                Input Data Verifikasi
              </a>
            </li>
            <li class="c-sidebar-nav-items">
              <a class="c-sidebar-nav-link" href="{{ url('data-verifikasi') }}">
                Data Verifikasi
              </a>
            </li>
          </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
          <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <span class="fas fa-recycle c-sidebar-nav-icon"></span>
              Retur Pita Cukai
          </a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-items">
              <a class="c-sidebar-nav-link" href="{{ url('input-defect') }}">
                  Input Data Retur
              </a>
            </li>
            <li class="c-sidebar-nav-items">
              <a class="c-sidebar-nav-link" href="{{ url('defect') }}">
                  Data Retur
              </a>
            </li>
          </ul>
        </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{ url('evaluasi') }}">
            <span class="cil-clipboard c-sidebar-nav-icon"></span>
              Pesan Evaluasi
          </a>
        </li>
    </li>
    <li class="c-sidebar-nav-title">
      Andon
      <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ url('andon') }}">
          <span class="cil-chart c-sidebar-nav-icon"></span>
            Progress Pita Cukai
        </a>
      </li>
    </li>
    <li class="c-sidebar-nav-dropdown">
      <a class="c-sidebar-nav-link" href="{{ url('andon_cetak') }}">
        <span class="cil-layers c-sidebar-nav-icon"></span>
          Cetak Pita Cukai
      </a>
    </li>
    <li class="c-sidebar-nav-dropdown">
      <a class="c-sidebar-nav-link" href="{{ url('andon_verifikasi') }}">
        <span class="cil-layers c-sidebar-nav-icon"></span>
          Verifikasi Pita Cukai
      </a>
    </li>
    <li class="c-sidebar-nav-dropdown">
      <a class="c-sidebar-nav-link" href="{{ url('andon_khazkhir') }}">
        <span class="cil-layers c-sidebar-nav-icon"></span>
          Khazkhir Pita Cukai
      </a>
    </li>
  </ul>
  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
