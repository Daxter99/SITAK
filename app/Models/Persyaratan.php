<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use UUID;

    protected $fillable = ['nama_persyaratan'];
}
