<?php

namespace App\Http\Controllers;

use App\Models\HrsTime;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $teacher_id= Auth::user()->id;
        $time_all_day = HrsTime::select('name','value')->get()->ToArray();
        $schedule =  Schedule::firstOrCreate(['teacher_id' => $teacher_id]);
        return view('frontend.teacher.dashboard-classrooms',compact('time_all_day','schedule'));
    }
    public function schedule_save($field,$time)
    {
        try {
            $teacher_id= Auth::user()->id;
            $schedule =  Schedule::firstOrCreate(['teacher_id' => $teacher_id]);
            $schedule->$field=$time;
            $schedule->save();

            return $field." value has been updated";
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

    }
}
