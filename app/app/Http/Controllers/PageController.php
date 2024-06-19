<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyUsersChart;
use App\Models\absen;
use App\Models\musrif;
use App\Models\santri;
use App\Models\userLogon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\select;

class PageController extends Controller
{
    function index()
    {
        return view('index');
    }

    public function dashboard(MonthlyUsersChart $monthlyUsersChart)
    {
        $absen = absen::with('jadwal.kegiatan', 'jadwal.musrif', 'jadwal.ustadz', 'santri')->orderBy('jadwal_id')->get();
        
        $chart = $monthlyUsersChart->build();

        return view('admin.dashboard', compact('absen', 'chart'));
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

    public function loggingIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only(['username', 'password']))) {
            $request->session()->regenerate();
            if (Auth::user()->role_id === 0) {
                return redirect('/dashboard');
            } else {
                return redirect('/dashboards');
            }
        }
        return back()->with('error', 'Username atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('logout', 'Anda telah log out');
    }
}
