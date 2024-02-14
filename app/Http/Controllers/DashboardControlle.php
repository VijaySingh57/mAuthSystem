<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardControlle extends Controller
{
    public function dashboard()
    {
        
        return view('admin.dashboard');
    }
}
