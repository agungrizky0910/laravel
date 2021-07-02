@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-md-14">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Alat Kalibrasi</h3>
                        <div class="right">
                            <span type="button" class="col-md-12 btn btn-primary btnAddAlat" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="lnr lnr-plus-circle"> Tambah Data Alat</i>
                            </span>
                        </div>
                    </div>
                    @yield('jadwal1')
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Alat</th>
                                    <th>Merek/Type</th>
                                    <th>Range/Resolusi</th>
                                    <th>No_Resi</th>
                                    <th>Pemegang</th>
                                    <th>Dept</th>
                                    <th>No_Registrasi</th>
                                    <th>Tanggal Kalibrasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_alat as $alat)
                                <tr>
                                    <td>{{$alat->nama_alat}}</td>
                                    <td>{{$alat->merek_type}}</td>
                                    <td>{{$alat->range_resolusi}}</td>
                                    <td>{{$alat->no_resi}}</td>
                                    <td>{{$alat->pemegang}}</td>
                                    <td>{{$alat->dept}}</td>
                                    <td>{{$alat->no_registrasi}}</td>
                                    <td>{{$alat->tgl_kalibrasi}}</td>
                                    <td>
                                        <a href="/alat/{{$alat->id}}/edit" class="btn btn-primary btn-sm"> Edit </a>
                                        <a href="/alat/{{$alat->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Delete</a>
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
</div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button> -->
            </div>

            <div class="modal-body">
                <form action="/alat/create" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Nama Alat</label>
                        <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Merek/Type</label>
                        <input name="merek_type" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Merek/Type">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Range/Resolusi</label>
                        <input name="range_resolusi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Range/Resolusi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No_Resi</label>
                        <input name="no_resi" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Resi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pemegang</label>
                        <input name="pemegang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemegang">
                    </div class="mb-3">
                    <label for="exampleinputemail1">Pilih Dept</label>
                    <select name="dept" class="form-control" id="exampleformcontrolselect1">
                        <option selected>Pilih</option>
                        <option>QA</option>
                        <option>Produksi</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No_Registrasi</label>
                        <input name="no_registrasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Registrasi">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Kalibrasi</label>
                        <input name="tgl_kalibrasi" class="form-control fa fa-calendar" type="date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kalibrasi">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('.btnAddAlat').on('click', function() {
            $('#exampleModal').modal('show');
        });
    })
</script>
@endsection