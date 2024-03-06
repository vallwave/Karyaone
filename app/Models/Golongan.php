<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'golongan';

    protected $fillable = [
        'nama_golongan',
    ];

    public function golongan()
    {
        return $this->hasMany(Golongan::class, 'id', 'id');
    }

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class, 'id', 'id');
    }
}
