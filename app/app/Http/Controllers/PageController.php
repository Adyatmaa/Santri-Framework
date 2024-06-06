<?php

namespace App\Http\Controllers;

use App\Models\musrif;
use App\Models\santri;
use App\Models\userLogon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function signUp()
    {
        return view('signUp');
    }

    public function isSignUp(Request $request)
    {
        $logon = new userLogon();
        $logon->username = $request->username;
        $logon->password = Hash::make($request->password);
        $logon->nama = $request->nama;
        $logon->role_id = $request->role_id;

        $logon->save();

        if ($request->role_id == 0) {
            $musrif = new musrif();
            $musrif->nim = $request->nim;
            $musrif->nama = $request->nama;
            $musrif->mabna = $request->mabna;
            $musrif->log_on_id = $logon->id;

            $musrif->save();
        } else {
            $santri = new santri();
            $santri->nim = $request->nim;
            $santri->nama = $request->nama;
            $santri->mabna = $request->mabna;
            $santri->log_on_id = $logon->id;

            $santri->save();
        }

        return redirect('/')->with('register', 'Akun berhasil dibuat, silahkan login ke aplikasi');
    }
}
