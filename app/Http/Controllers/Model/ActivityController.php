<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\Facades\DataTables;

class ActivityController extends Controller
{
    public function index()
    {
        $data = Activity::latest('created_at')
            ->with(['subject', 'causer'])
            ->get()
            ->map(function ($activity) {
                return [
                    'id' => $activity->id,
                    'log_name' => $activity->log_name,
                    'description' => $activity->description,
                    'subject_type' => $activity->subject_type,
                    'event' => $activity->event,
                    'subject_id' => $activity->subject_id,
                    'causer_type' => $activity->causer_type,
                    'causer_id' => $activity->causer_id,
                    'created_at' => $activity->created_at->format('Y-m-d H:i:s'),
                ];
            });

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }
}
