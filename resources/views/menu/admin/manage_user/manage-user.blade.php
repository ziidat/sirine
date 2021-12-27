@extends('layout.app')
@section('tittle', 'Manajemen User')
@section('content')
<div class="c-body">
  <main class="c-main">
    <div class="container-fluid">
      <div class="fade-in">
        <div class="card">
          <div class="card-header">
            <h3 style="text-align: center">Biodata Pegawai Unit Verifikasi Pita Cukai</h3>
          </div>
          <div class="card-body"  >
            <div class="row">
              <div class="col-sm-3">
                <div class="dataTables_length" >
                  <label for="datatable_length">Tampilkan : 
                  <select id="paginate" class="btn border">
                      <option value="15">15</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="1000">All</option>
                    </select> entri
                  </label>
                </div>
              </div>
              <div class="col-md-9">
                <a class="btn btn-primary text-white pull-right" href="{{route('manage-user.create')}}" style="float: right">Tambah User</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div id="datatable_filter">
                  <label  style="float:left;">
                    <input type="search" class="form-control form-control-sm" placeholder="Cari" aria-controls="datatable">
                  </label>
                </div>
              </div>
            </div>
            {{-- Session Untuk Alert Hapus User --}}
            @if(\Session::has('notif'))
                <div class="row">
                  <div class="col-md-12">
                    <div class="alert alert-success" style="text-align: center" role="alert">User Berhasil Di Hapus</div>
                  </div>
                </div>
            @endif
            {{-- End Session Untuk Alert Hapus User --}}
            <div class="row" style="margin-top: 20px" id="table-user">
              @include('menu.admin.manage_user.table-user')
            </div>
            {{ $profile->links() }}
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

@endsection

@section('script-js')
{{-- Session Untuk Ubah dan Tambah User --}}
@if(\Session::has('pesan'))
  @include('layout.modal.user-success')
    <script>
      $(function() {
          $('#success-modal').modal('show');
      });
      </script>
  @elseif (\Session::has('tambah-user'))
  @include('layout.modal.user-success')
    <script>
      $(function() {
          $('#tambah-modal').modal('show');
      });
      </script>
@endif
{{-- End Session Untuk Ubah dan Tambah User --}}
@endsection
