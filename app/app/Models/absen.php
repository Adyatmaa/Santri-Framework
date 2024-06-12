<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;
    protected $table = 'absens';

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class, 'jadwal_id');
    }

    public function santri()
    {
        return $this->belongsTo(santri::class, 'santri_id');
    }
}
