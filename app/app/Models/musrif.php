<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musrif extends Model
{
    use HasFactory;
    protected $table = 'musrifs';

    protected $fillable = [
        'nim',
        'nama',
        'mabna',
    ];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class);
    }
}
