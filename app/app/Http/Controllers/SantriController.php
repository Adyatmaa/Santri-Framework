<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function pageTalim()
    {
        return view('santri.talim');
    }

    public function pageTashih()
    {
        return view('santri.tashih');
    }
}
