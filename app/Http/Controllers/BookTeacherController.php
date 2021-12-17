<?php

namespace App\Http\Controllers;

use App\Models\HrsTime;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookTeacherController extends Controller
{
    public function index()
    {
        $teacher_id= Auth::user()->id;
        $schedules =  Schedule::where('teacher_id' , $teacher_id)->orderBy('level', 'asc')->get();
        $count=['mon'=>4,'tue'=>4,'wed'=>4,'thu'=>4,'fri'=>4,'sat'=>4,'sun'=>4];
        foreach ($schedules as $schedule){
            if($schedule->mon_start==100){
                $count['mon']=$count['mon']-1;
                // dd($count);
            }
        }
        // dd($count);

        // dd($schedules);
        $this->data['schedules']=$schedules;

        return view('frontend.page-course',$this->data);
    }
}
