<?php

namespace App\Http\Controllers;
use App\Models\Trainer;
use DB;

use Illuminate\Http\Request;

class TrainerController extends Controller
{

    public function viewTrainer(){
        $data = DB::table('trainers')->get();
        return view('trainer_list',['data'=>$data]);
    }

    public function viewTrainerindex(){
        $data = DB::table('trainers')->get();
        return view('team',['data'=>$data]);
    }

    public function viewTraineruser(){
        $data = DB::table('trainers')->get();
        return view('trainer_list_user',['data'=>$data]);
    }

    public function addTrainer(Request $request){
        $trainer = new Trainer;
        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->title = $request->title;
        $image = $request->file('image');
        $destinationPath = 'assets/uploads/';
        $file_name = time() . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $file_name);
        $trainer->image = $file_name;
        $flag = $trainer->save();
        if($flag == 1){
            return back()->with('success','Trainer Data Added!');
        }
    }

    public function delTrainer($id) {
        DB::delete('delete from trainers where id = ?',[$id]);
        return back()->with('success','Trainer Data Deleted!');
        // echo '<a href = "/delete-records">Click Here</a> to go back.';
     }
}
