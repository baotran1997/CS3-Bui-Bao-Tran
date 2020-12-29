<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashBoard() {
        return view('admin.layout.dashboard');
    }
}
