<?php

namespace App\Http\Controllers;

use App\Models\StatusConstant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showFormLogin() {
        return view('admin.layout.login');
    }

    public function login(Request $request){

        $user = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'status' => StatusConstant::ACTIVATE,
        ];

        if(!Auth::attempt($user)) {
            return redirect()->route('login')->with('login-error', "Wrong Username or Password!");
        } else {
            return redirect()->route('admin.DashBoard');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
