<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ustadz extends Model
{
    use HasFactory;
    protected $table = 'ustadzs';

    protected $fillable = [
        'nama',
    ];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }
}
