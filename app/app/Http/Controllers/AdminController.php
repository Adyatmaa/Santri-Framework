<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use App\Models\musrif;
use App\Models\santri;
use App\Models\ustadz;
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
        $record = ustadz::all();
        return view('admin.ustadz', compact('record'));
    }

    public function pageMusrif()
    {
        $record = musrif::all();
        return view('admin.musrif', compact('record'));
    }

    public function addUstadz(Request $request)
    {
        $record = new ustadz();
        $record->nama = $request->nama;
        $record->save();
        return back();
    }

    public function delUstadz($id)
    {
        $record = ustadz::findOrFail($id);
        $record->delete();
        return back();
    }

    public function pageSantri()
    {
        $record = santri::all();
        return view('admin.mahasantri', compact('record'));
    }

    public function pageKegiatan()
    {
        $record = kegiatan::all();
        return view('admin.kegiatan', compact('record'));
    }

    public function addKegiatan(Request $request)
    {
        $record = new kegiatan();
        $record->nama = $request->kegiatan;
        $record->save();
        return back();
    }

    public function delKegiatan($id)
    {
        $record = kegiatan::findOrFail($id);
        $record->delete();
        return back();
    }

    public function pageAddTalim()
    {
        return view('admin.form.addTalim');
    }
}
