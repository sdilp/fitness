<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use DB;

class SchedulesController extends Controller
{
    public function viewschedules(){
        $data = DB::table('schedules')->get();
        return view('schedule_list',['data'=>$data]);
    }

    public function viewschedulesindex(){
        $data = DB::table('schedules')->get();
        return view('class',['data'=>$data]);
    }

    public function viewschedulesuser(){
        $data = DB::table('schedules')->get();
        return view('schedule_list_user',['data'=>$data]);
    }

    public function addSchedules(Request $request){
        $schedules = new Schedules;
        $schedules->pname = $request->pname;
        $schedules->type = $request->type;
        $schedules->time = $request->time;
        $flag = $schedules->save();
        if($flag == 1){
            return back()->with('success','Scedules Data Added!');
        }
    }

    public function delSchedule($id) {
        DB::delete('delete from schedules where id = ?',[$id]);
        return back()->with('success','Schedules Data Deleted!');
        // echo '<a href = "/delete-records">Click Here</a> to go back.';
     }
}
