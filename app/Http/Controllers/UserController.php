<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(Request $request)
    {
        // die('hh');
        if ($request->has('cari')) {
            $data_user = \App\Models\user::where('nama_user', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_user = \App\Models\user::all();
            // dd($data_user[0]['name']);
        }
        $data_user_login = $request->session()->get('user.data.0');
        // dd($data_user);
        return view('user.index', ['data_user_login' => $data_user_login, 'data_user' => $data_user]);
    }
    public function create(Request $request)
    {
        //inser ke table petugas
        $data_user = $request->session()->get('user.data.0');

        // dd($request->all());
        $cred = $request->all();
        $cred['password'] = bcrypt($request->password);
        $cred['users_id'] = $data_user->id;

        //insert ke table alat
        // $request->request->add(['user_id' => $user->id]);

        $alat = \App\Models\user::create($cred);
        return redirect('/user')->with('sukses', 'Data Berhasil Di input');
    }
    public function edit($id)
    {
        $user = \App\Models\user::find($id);
        return view('user/edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = \App\Models\user::find($id);
        $user->update($request->all());
        return redirect('/user')->with('sukses', 'Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $user = \App\Models\user::find($id);
        $user->delete($user);
        return redirect('/user')->with('sukses', 'Data Berhasil Di Delete');
    }
    public function login()
    {
        return view('user.login');
    }
    public function postlogin(request $request)
    {
        if (user::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function logout()
    {
        user::logout();
        return redirect('/login');
    }
}
