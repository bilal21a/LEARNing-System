<?php

namespace App\Http\Controllers;

use App\Models\HrsTime;
use App\Models\Schedule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookTeacherController extends Controller
{
    public function index($id)
    {
        $id=1;
        $teacher_id= User::where('id',$id)->first()->id;
        $this->data['teacher_id']=$teacher_id;

        // dd(Auth::user()->role);
        $schedules =  Schedule::where('teacher_id' , $teacher_id)->orderBy('level', 'asc')->get();
        $count=[
            'mon_start'=>4,'tue_start'=>4,'wed_start'=>4,'thu_start'=>4,'fri_start'=>4,'sat_start'=>4,'sun_start'=>4,
            'mon_end'=>4,'tue_end'=>4,'wed_end'=>4,'thu_end'=>4,'fri_end'=>4,'sat_end'=>4,'sun_end'=>4
    ];
        foreach ($schedules as $schedule) {
            if ($schedule->mon_start==100) {
                $count['mon_start']=$count['mon_start']-1;
            }
            if($schedule->mon_end==100){
                $count['mon_end']=$count['mon_end']-1;
            }
            if($schedule->tue_start==100){
                $count['tue_start']=$count['tue_start']-1;
            }
            if($schedule->tue_end==100){
                $count['tue_end']=$count['tue_end']-1;
            }
            if($schedule->wed_start==100){
                $count['wed_start']=$count['wed_start']-1;
            }
            if($schedule->wed_end==100){
                $count['wed_end']=$count['wed_end']-1;
            }
            if($schedule->thu_start==100){
                $count['thu_start']=$count['thu_start']-1;
            }
            if($schedule->thu_end==100){
                $count['thu_end']=$count['thu_end']-1;
            }
            if($schedule->fri_start==100){
                $count['fri_start']=$count['fri_start']-1;
            }
            if($schedule->fri_end==100){
                $count['fri_end']=$count['fri_end']-1;
            }
            if($schedule->sat_start==100){
                $count['sat_start']=$count['sat_start']-1;
            }
            if($schedule->sat_end==100){
                $count['sat_end']=$count['sat_end']-1;
            }
            if($schedule->sun_start==100){
                $count['sun_start']=$count['sun_start']-1;
            }
            if($schedule->sun_end==100){
                $count['sun_end']=$count['sun_end']-1;
            }
        }
        $this->data['schedules']=$schedules;
        $this->data['count']=$count;

        // dd($this->data);

        return view('frontend.page-course',$this->data);
    }

    public function get_free_trail(Request $request)
    {
        // dd($request->all());
        return 0;
    }
}
