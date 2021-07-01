<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_alat = \App\Models\alat::where('nama_alat', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_alat = \App\Models\alat::all();
        }

        return view('jadwal.index', ['data_alat' => $data_alat]);
    }
    public function create(Request $request)
    {
        //inser ke table petugas
        $data_user = $request->session()->get('user.data.0');

        // dd($request->all());
        $cred = $request->all();
        $cred['users_id'] = $data_user->id;

        //insert ke table alat
        // $request->request->add(['user_id' => $user->id]);

        $alat = \App\Models\alat::create($cred);
        return redirect('/alat')->with('sukses', 'Data Berhasil Di input');
    }
}
