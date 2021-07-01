<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(request $request)
    {
        // dd($request->email);
        if (Auth::attempt($request->only('email', 'password'))) {
            $users = DB::table('users')
                ->where('email', $request->email)
                // ->where('password', 35)
                ->first();

            $request->session()->push('user.data', $users);

            // dd($users);
            // dd($request->session()->all());

            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
