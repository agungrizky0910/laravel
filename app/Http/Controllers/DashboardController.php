<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data_user = $request->session()->get('user.data.0');
        return view('dashboards.index', ['data_user' => $data_user]);
    }
}
