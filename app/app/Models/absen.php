<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;
    protected $table = 'absens';

    protected $fillable = [
        'jadwal_id',
        'santri_id',
    ];

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class, 'jadwal_id');
    }

    public function santri()
    {
        return $this->belongsTo(santri::class, 'santri_id');
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Pastikan tidak ada duplikat absen untuk satu jadwal_id dan santri_id
            return static::where('jadwal_id', $model->jadwal_id)
                ->where('santri_id', $model->santri_id)
                ->doesntExist();
        });
    }
}
