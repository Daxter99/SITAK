<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Maahasiswa extends Model
{
    use UUID, LogsActivity;

    protected $fillable = ['nama_mahasiswa'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->setDescriptionForEvent(fn(string $eventName) => "Mahasiswa has been {$eventName}")
            ->useLogName('Mahasiswa') // Set the log name for the activity
            ->logOnly(['nama_mahasiswa']);
    }
}
