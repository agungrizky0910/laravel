<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_alat = \App\Models\alat::where('nama_alat', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_alat = \App\Models\alat::all();
        }

        return view('proses.index', ['data_alat' => $data_alat]);
    }
}
