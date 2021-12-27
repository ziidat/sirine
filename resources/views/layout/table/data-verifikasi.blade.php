
<table class="table table-responsive-sm table-bordered table-striped table-sm">
  <thead>
    <tr>
      <th  style="text-align:center"> No </th>
      <th  style="text-align:center"> Np </th>
      <th  style="text-align:center"> Nama </th>
      <th  style="text-align:center"> Tgl Verif </th>
      <th  style="text-align:center"> Jumlah Rim </th>
      <th  style="text-align:center"> Target </th>
      <th  style="text-align:center"> Lembur </th>
      <th  style="text-align:center"> Keterangan </th>
      <th  style="text-align:center"> Aksi </th>
      <th  style="text-align:center"> Select </th>
    </tr>
  </thead>
  <tbody>
    @foreach($hvh as $verifikasi)
    <tr>
      <th scope="row" style="text-align:center; width:5%">{{$loop->iteration}}</th>
      <td style="text-align:center; width:10%">{{$verifikasi->np_user}}</td>
      <td style=" width:15%">{{$verifikasi->np_nama}}</td>
      <td style="text-align:center; width:10%">{{$verifikasi->tgl_verif}}</td>
      <td style="text-align:center; width:5%">{{$verifikasi->jml_rim}}</td>
      <td style="text-align:center; width:5%">{{$verifikasi->target}}</td>
      <td style="text-align:center; width:10%">{{$verifikasi->lembur}}</td>
      <td style="text-align:center; width:25%">{{$verifikasi->keterangan}}</td>
      <td style="width: 5%; text-align:center">
        <form action="{{route('data-verifikasi.destroy',[$verifikasi->id])}}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger btn-sm btn-icon" type="button" data-toggle="modal" data-target="#delete-modal{{ $verifikasi->id }}" style="width:auto" id="hapus" name="hapus"><i class="c-icon cil-trash"></i></button>
          {{-- Modal Delete --}}
          @include('layout.modal.konfirmasi-delete-hvh')
        </form>
      </td>
      <td style="text-align:center; width:5%">
        <div class="form-check checkbox">
          <input class="form-check-input" id="check1" type="checkbox" value="">
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $hvh->links() }}