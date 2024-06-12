<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $guarded = ['id'];

    public function userLogon()
    {
        return $this->hasMany(User::class);
    }
}
