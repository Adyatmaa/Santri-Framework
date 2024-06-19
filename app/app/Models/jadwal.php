<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $tabel = 'jadwals';

    protected $fillable = [
        'kelas',
        'ruang',
        'waktu',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class, 'kegiatan_id');
    }

    public function ustadz()
    {
        return $this->belongsTo(ustadz::class, 'ustadz_id');
    }

    public function musrif()
    {
        return $this->belongsTo(musrif::class, 'musrif_id');
    }

    public function absen()
    {
        return $this->hasMany(absen::class);
    }

    public function getFormattedWaktuAttribute()
    {
        if (!isset($this->attributes['waktu'])) {
            return null; // Mengembalikan null jika waktu tidak ada
        }

        return Carbon::parse($this->attributes['waktu'])
            ->timezone('Asia/Jakarta')
            ->format('l, H:i');
    }

    //jadwal belongsto kegiatan

}
