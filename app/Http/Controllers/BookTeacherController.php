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
        $schedules =  Schedule::where('teacher_id' , $teacher_id)->first();

        $this->data['mon_start']=HrsTime::where('value',$schedules->mon_start)->first()->name;
        $this->data['mon_end']=HrsTime::where('value',$schedules->mon_end)->first()->name;
        $this->data['tue_start']=HrsTime::where('value',$schedules->tue_start)->first()->name;
        $this->data['tue_end']=HrsTime::where('value',$schedules->tue_end)->first()->name;
        $this->data['wed_start']=HrsTime::where('value',$schedules->wed_start)->first()->name;
        $this->data['wed_end']=HrsTime::where('value',$schedules->wed_end)->first()->name;
        $this->data['thu_start']=HrsTime::where('value',$schedules->thu_start)->first()->name;
        $this->data['thu_end']=HrsTime::where('value',$schedules->thu_end)->first()->name;
        $this->data['fri_start']=HrsTime::where('value',$schedules->fri_start)->first()->name;
        $this->data['fri_end']=HrsTime::where('value',$schedules->fri_end)->first()->name;
        $this->data['sat_start']=HrsTime::where('value',$schedules->sat_start)->first()->name;
        $this->data['sat_end']=HrsTime::where('value',$schedules->sat_end)->first()->name;
        $this->data['sun_start']=HrsTime::where('value',$schedules->sun_start)->first()->name;
        $this->data['sun_end']=HrsTime::where('value',$schedules->sun_end)->first()->name;

        $this->data['schedules']=$schedules;

        return view('frontend.page-course',$this->data);
    }
}
