<?php

namespace App\Http\Controllers;

use App\Models\absen;
use App\Models\jadwal;
use App\Models\santri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\select;

class SantriController extends Controller
{

    public function dashboardS()
    {
        $current = Auth::user()->id;
        $santri = santri::where('log_on_id', $current)->get();

        $jadwal = jadwal::with('kegiatan', 'musrif', 'ustadz')->get();
        

        return view('santri.dashboard', compact('jadwal', 'santri'));
    }

    public function absen(Request $request)
    {
        $record = new absen();

        $record->jadwal_id = $request->jadwal_id;
        $record->santri_id = $request->santri;
        $record->save();

        return back();
    }
}
