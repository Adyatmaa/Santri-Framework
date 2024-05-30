<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pageTalim()
    {
        return view('admin.talim');
    }

    public function pageTashih()
    {
        return view('admin.tashih');
    }

    public function pageUstadz()
    {
        return view('admin.ustadz');
    }

    public function pageSantri()
    {
        return view('admin.mahasantri');
    }
    
    public function pageAddTalim()
    {
        return view('admin.form.addTalim');
    }
}
