<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    use HasFactory;
    protected $table = 'santris';

    protected $fillable = [
        'nim',
        'nama',
        'mabna',
    ];

    public function absen()
    {
        return $this->hasMany(absen::class);
    }
}
