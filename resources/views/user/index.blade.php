@extends('layouts.master')
@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-md-15">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Alat Kalibrasi</h3>
                        <div class="right">
                            <span type="button" class="col-md-12 btn btn-primary btnAdduser" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="lnr lnr-plus-circle"> Tambah Data user</i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama user</th>
                                    <th>Email user</th>
                                    <th>Password</th>
                                    <th>remember token</th>
                                    <th>Id Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_user as $user => $value)
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->password}}</td>
                                    <td>{{$value->remember_token}}</td>
                                    <td>{{$value->id_role}}</td>

                                    <td>
                                        <a href="/user/{{$value->id}}/edit" class="btn btn-primary btn-sm"> Edit </a>
                                        <a href="/user/{{$value->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')">Delete</a>
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
                <form action="/user/create" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1">nama_user</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama user">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Email user</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email user">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password user">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Id_Role</label>
                        <input name="id_role" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Role">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">Remember Token</label>
                        <input name="remember_token" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Remember Token">
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
        $('.btnAdduser').on('click', function() {
            $('#exampleModal').modal('show');
        });
    })
</script>
@endsection