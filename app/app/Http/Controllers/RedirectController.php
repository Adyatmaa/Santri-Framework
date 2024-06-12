<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    //
    public function cekStatus()
    {
        if (auth()->user()->role_id === 0) {
            return redirect('/dashboard');
        } else {
            return redirect('/dashboards');
        }
    }
}
