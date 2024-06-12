<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userLogon extends Model
{
    use HasFactory;
    protected $table = 'user_log_on';

    protected $fillable = [
        'username',
        'nama',
        'password',
        'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(role::class, 'role_id');
    }
}
