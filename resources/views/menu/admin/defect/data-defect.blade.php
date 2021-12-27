@extends('layout.app')
@section('tittle','Data Kelolosan Pita Cukai')
@section('content')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div class="fade-in">
                <div class="card">
                    <div class="card-header">
                      <h3 style="text-align: center">Data Retur Pita Cukai</h3>
                    </div>
                    <div class="card-body" style="overflow-x: auto">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="dataTables_length" id="datatable_length">
                            <label for="datatable_length">Tampilkan : 
                            <select class="btn border">
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="-1">All</option>
                              </select> entri
                            </label>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <a class="btn btn-primary text-white pull-right" href="{{url('input-defect')}}" style="float: right">Tambah Data</a>
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
                      {{-- Session Untuk Alert Hapus Kelolosan --}}
                      @if(\Session::has('notif'))
                          <div class="row">
                            <div class="col-md-12">
                              <div class="alert alert-success" style="text-align: center" role="alert">Data Kelolosan Berhasil Di Hapus</div>
                            </div>
                          </div>
                      @endif
                      {{-- End Session Untuk Alert Hapus Kelolosan --}}
                      <div class="row" style="margin-top: 20px">
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                          <thead>
                            <tr>
                              <th  style="text-align:center"> No </th>
                              <th  style="text-align:center"> Nama </th>
                              <th  style="text-align:center"> Np </th>
                              <th  style="text-align:center"> Periode CK3 </th>
                              <th  style="text-align:center"> Total Retur </th>
                              <th  style="text-align:center"> Jenis Retur </th>
                              <th  style="text-align:center"> Aksi </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($defect as $defect)
                            <tr>
                              <th scope="row"  style="text-align:center; width:5%">{{$loop->iteration}}</th>
                              <td style="width: 20%">{{$defect->nama_user}}</td>
                              <td style="text-align:center; width:10%">{{$defect->np_user}}</td>
                              <td style="text-align:center; width:15%">{{$defect->tgl_cek}}</td>
                              <td style="text-align:center; width:10%">{{ $defect->total_retur }}</td>
                              <td style="text-align:center; width:30%">
                                @if ($defect->holoMiss > 0 || $defect->holoScratch > 0 || $defect->holoReg > 0)
                                  Hologram |
                                @endif
                                @if ($defect->printBlurTxt > 0 || $defect->printBlurImg > 0)
                                  Blur |
                                @endif
                                @if ($defect->printSmear > 0 || $defect->printSpot > 0 )
                                  Blobor/Noda  |
                                @endif
                                @if ($defect->printUnder > 0 || $defect->printOver > 0 || $defect->colorUnderImg > 0 || $defect->colorOverImg > 0 || $defect->colorUnderTxt > 0 || $defect->colorOverTxt > 0)
                                  Tebal/Tipis  |
                                @endif
                                @if ($defect->colorIncorrect > 0 || $defect->colorNonUniform > 0)
                                  Salah Spec  |
                                @endif
                                @if ($defect->appearanceFolded > 0 || $defect->appearancePlooi > 0)
                                  Flui/Terlipat  |
                                @endif
                                @if ($defect->appearanceHole > 0 || $defect->appearanceTear > 0)
                                  Bolong/Sobek  |
                                @endif
                                @if ($defect->mixedProduct > 0)
                                  Tercampur  |
                                @endif
                              </td>
                              <td style="width: 10%;text-align:center">
                                <a href="{{ route('defect.show',[$defect->id]) }}" class="btn btn-info btn-sm btn-icon" style="width:auto" value="Detail"><i class="cil-magnifying-glass"></i></a>
                                <a href="{{ route('defect.show',[$defect->id]) }}"  class="btn btn-success btn-sm btn-icon" style="width:auto"><i class="c-icon cil-pencil"></i></a>
                                <form action="{{ route('defect.destroy',[$defect->id]) }}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf
                                  <button type="button" class="btn btn-danger btn-sm btn-icon" style="width:auto" data-toggle="modal" data-target="#delete-modal{{ $defect->id }}" id="delete" name="delete"><i class="c-icon cil-trash"></i></button>
                                  {{-- Modal Delete --}}
                                    @include('layout.modal.konfirmasi-delete-defect')
                                  {{-- End Modal Delete --}}
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection