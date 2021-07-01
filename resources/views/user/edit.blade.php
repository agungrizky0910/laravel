@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="col-md-14">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Data user</h3>

                    </div>

                    <div class="panel-body">
                        <form action="/user/{{$user->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama user</label>
                                <input name="name" value="{{$user->nama_user}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama user">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                <input name="role" value="{{$user->role}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Posisi user">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email user</label>
                                <input name="email" value="{{$user->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email user">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input name="password" value="{{$user->password}}" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Paasword user">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><a href="http://127.0.0.1:8000/user" class="text-decoration-none">Close</a></button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection