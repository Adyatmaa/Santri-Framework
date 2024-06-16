<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\kegiatan;
use App\Models\musrif;
use App\Models\santri;
use App\Models\ustadz;
use Carbon\Carbon;
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

    public function updateUstadz(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $record = ustadz::findOrFail($id);
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

    public function updateKegiatan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        $record = kegiatan::findOrFail($id);
        $record->nama = $request->nama;
        $record->save();

        return back();
    }

    public function delKegiatan($id)
    {
        $record = kegiatan::findOrFail($id);
        $record->delete();
        return back();
    }

    public function pageJadwal()
    {
        $record = jadwal::with('kegiatan', 'musrif', 'ustadz')->get();
        
        $ustad = ustadz::all();
        $musrif = musrif::all();
        $kegiatan = kegiatan::all();
        
        // dd($record);
        return view('admin.jadwal', compact('record', 'ustad', 'musrif', 'kegiatan'));
    }

    public function inputJadwal()
    {
        $ustad = ustadz::all();
        $musrif = musrif::all();
        $kegiatan = kegiatan::all();
        return view('admin.form.addJadwal', compact(['ustad', 'musrif', 'kegiatan']));
    }

    public function inputingJadwal(Request $request)
    {
        $record = new jadwal();

        $record->kegiatan_id = $request->kegiatan;
        $record->ustadz_id = $request->ustad;
        $record->musrif_id = $request->musrif;
        $record->kelas = $request->kelas;
        $record->ruang = $request->ruang;
        $record->waktu = $request->waktu;

        $record->save();
        return redirect('jadwal');
    }

    public function updateJadwal(Request $request, $id)
    {
        $data = $request->validate([
            'kegiatan' => 'required',
            'musrif' => 'required',
            'ustad' => 'required',
            'kelas' => 'required',
            'ruang' => 'required',
            'waktu' => 'required',
        ]);

        $record = jadwal::findOrFail($id);

        $record->kegiatan_id = $data['kegiatan'];
        $record->musrif_id = $data['musrif'];
        $record->ustadz_id = $data['ustad'];
        $record->kelas = $data['kelas'];
        $record->ruang = $data['ruang'];
        $record->waktu = $data['waktu'];
        $record->save();

        return back();
    }

    public function delJadwal($id)
    {
        $record = jadwal::findOrFail($id);
        $record->delete();
        return back();
    }

    public function pageAddTalim()
    {
        return view('admin.form.addTalim');
    }
}
