<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Persyaratan extends Model
{
    use UUID, LogsActivity;

    protected $fillable = ['nama_persyaratan'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->setDescriptionForEvent(fn(string $eventName) => "Persyaratan has been {$eventName}")
            ->useLogName('Persyaratan') // Set the log name for the activity
            ->logOnly(['nama_persyaratan']);
    }
}
