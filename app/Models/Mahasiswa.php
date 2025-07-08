<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Maahasiswa extends Model
{
    protected $table = 'mahasiswas';

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'no_telp',
        'prodi',
        'angkatan',
        'status',
        'judul',
        'waktu_daftar',
        'alamat'
    ];
}
