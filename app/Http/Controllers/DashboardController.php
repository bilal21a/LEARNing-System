<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('frontend.teacher.dashboard-classrooms');
    }
    public function schedule_save(Request $request)
    {
        $schedule = new Schedule();
        $schedule->name=$request->cname;
        $schedule->teacher_id=Auth::user()->id;
        $schedule->year=$request->year;
        $schedule->month=$request->month;
        $schedule->days=serialize($request->days);
        $schedule->time=serialize($request->available_time);
        $schedule->save();

        return redirect()->back();
    }
}
