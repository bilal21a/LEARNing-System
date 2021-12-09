<?php

namespace App\Http\Controllers;

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
        dd($schedules->mon_start->HrsTime->name);
        return view('frontend.page-course',compact('schedules'));
    }
}
