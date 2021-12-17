<?php

namespace App\Http\Controllers;

use App\Models\HrsTime;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class DashboardController extends Controller
{
    public function index()
    {
        $teacher_id= Auth::user()->id;
        $time_all_day = HrsTime::select('name','value')->get()->ToArray();
        $schedule =  Schedule::where('teacher_id' , $teacher_id)->get();
        if ($schedule->count()) {
            // exists
            $schedule_first=$schedule->where('level',1)->first();
            $schedule_second=$schedule->where('level',2)->first();
            $schedule_third=$schedule->where('level',3)->first();
            $schedule_fourth=$schedule->where('level',4)->first();
        }else{
            $schedule_first='';
            $schedule_second='';
            $schedule_third='';
            $schedule_fourth='';

        }
        // dd($schedule_fourth);
        return view('frontend.teacher.dashboard-classrooms',compact('time_all_day','schedule','schedule_first','schedule_second','schedule_third','schedule_fourth'));
    }
    public function schedule_save_second($field,$time,$time_data)
    {
        $field = explode( '-', $field );
        // $field[1]="third";
        $level=$field[1];
        try {
            $teacher_id= Auth::user()->id;
            $schedule1 =  Schedule::where('teacher_id' , $teacher_id)->where('level' , $level)->first();
            // dd($schedule1);
            if ($schedule1==null) {
                $schedule = new Schedule();
                $schedule->teacher_id=$teacher_id;
                $schedule->level=$level;
            }else{
                $schedule=$schedule1;
            }

            $parm=$field[0];
            $parm_val=$field[0]."_val";
            $schedule->$parm=$time;
            $schedule->$parm_val=$time_data;
            $schedule->save();
            return $field[0]." value has been updated";
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
