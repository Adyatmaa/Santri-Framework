<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function dashboardS()
    {
        return view('santri.dashboard');
    }

    
}
