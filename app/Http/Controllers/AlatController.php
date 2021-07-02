<?php

namespace App\Http\Controllers;

use App\Models\alat;
use App\Models\petugas;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_alat = \App\Models\alat::where('nama_alat', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_alat = \App\Models\alat::all();
        }

        $data_user = $request->session()->get('user.data.0');
        return view('alat.index', ['data_alat' => $data_alat, 'data_user' => $data_user]);
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
    public function edit($id)
    {
        $alat = \App\Models\alat::find($id);
        return view('alat/edit', ['alat' => $alat]);
    }
    public function update(Request $request, $id)
    {
        $alat = \App\Models\alat::find($id);
        $alat->update($request->all());
        return redirect('/alat')->with('sukses', 'Data Berhasil Di Update');
    }
    public function delete($id)
    {
        $alat = \App\Models\alat::find($id);
        $alat->delete($alat);
        return redirect('/alat')->with('sukses', 'Data Berhasil Di Delete');
    }
    public function proses($id)
    {
    }
}
