@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-md-14">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Data</h3>

                    </div>

                    <div class="panel-body">
                        <form action="/alat/{{$alat->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Alat</label>
                                <input name="nama_alat" value="{{$alat->nama_alat}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Merek/Type</label>
                                <input name="merek_type" value="{{$alat->merek_type}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Merek/Type">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Range/Resolusi</label>
                                <input name="range_resolusi" value="{{$alat->range_resolusi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Range/Resolusi">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No_Resi</label>
                                <input name="no_resi" value="{{$alat->no_resi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Resi">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Pemegang</label>
                                <input name="pemegang" value="{{$alat->pemegang}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemegang">
                            </div>
                            <label>Pilih Dept</label>
                            <div class="mb-3">
                                <select name="dept" class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option @if($alat->dept == 'QA') selected @endif>QA</option>
                                    <option @if($alat->dept == 'Produksi') selected @endif>Produksi</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">No_Registrasi</label>
                                <input name="no_registrasi" value="{{$alat->no_registrasi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Registrasi">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Kalibrasi</label>
                                <input name="tgl_kalibrasi" value="{{$alat->tgl_kalibrasi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kalibrasi">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><a href="http://127.0.0.1:8000/alat" class="text-decoration-none">Close</a></button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content1')


<h1>Edit Data Alat Kalibrasi</h1>
@if(session('suskses'))
<div class="alert alert-info" role="alert">
    {{session('suskses')}}
</div>
@endif
<div class="row"></div>
<div class="col-lg-8">
    <form action="/alat/{{$alat->id}}/update" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Alat</label>
            <input name="nama_alat" value="{{$alat->nama_alat}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Alat">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Merek/Type</label>
            <input name="merek_type" value="{{$alat->merek_type}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Merek/Type">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Range/Resolusi</label>
            <input name="range_resolusi" value="{{$alat->range_resolusi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Range/Resolusi">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No_Resi</label>
            <input name="no_resi" value="{{$alat->no_resi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Resi">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pemegang</label>
            <input name="pemegang" value="{{$alat->pemegang}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pemegang">
        </div>
        <label>Pilih Dept</label>
        <select name="dept" class="form-select" aria-label="Default select example">
            <option selected>Pilih</option>
            <option>QA</option>
            <option>Produksi</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No_Registrasi</label>
            <input name="no_registrasi" value="{{$alat->no_registrasi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No_Registrasi">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal Kalibrasi</label>
            <input name="tgl_kalibrasi" value="{{$alat->tgl_kalibrasi}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kalibrasi">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><a href="http://127.0.0.1:8000/alat" class="text-decoration-none">Close</a></button>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</div>
@endsection