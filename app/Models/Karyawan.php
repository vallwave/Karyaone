<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use HasFactory;

    // Menyebutkan nama tabel yang sesuai
    protected $table = 'karyawan'; 
    protected $primaryKey = "ID";

    // Tambahkan kolom lain yang sesuai dengan skema database Anda
        protected $fillable = [
            'nip',
            'nik',
            'nama',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'telpon',
            'agama',
            'status_nikah',
            'alamat',
            'golongan_id',
        ];
}
