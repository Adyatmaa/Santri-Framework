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
        'log_on_id',
    ];

    public function absen()
    {
        return $this->hasMany(absen::class);
    }

    public function logon()
    {
        return $this->belongsTo(User::class, 'log_on_id');
    }
}
