<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{

    public function getData(){
        $users = DB::table('users')->get();
        return view('dashboard',['users'=>$users]);
    }

    public function save(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $flag = $user->save();
        if($flag == 1){
            echo "Registered!!!";
        }
        ///print_r($request->input());
    }

    public function user_login(Request $request){
        $user = new User;
        $email = $request->email;
        $password = $request->password;
        $users = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if($users){
            $users = DB::table('users')->get();
            return view('dashboard',['users'=>$users]);
        }
        else{
            return back()->with('error','Wrong Credentials!');
            
        }
    }

    public function getuserData(){
        $users = DB::table('users')->get();
        return view('dashboard',['users'=>$users]);
    }

    public function user_logout(){
        session_start();
        session_destroy();
        return view('login');
    }
}
