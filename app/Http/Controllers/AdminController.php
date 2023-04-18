<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function admin_login(Request $request){
        $admin = new Admin;
        $email = $request->email;
        $password = $request->password;
        $admin = DB::table('admin')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if($admin){
            $user = DB::table('users')->get();
            $_SESSION['email'] = $email;
            return view('admin_dashb',['user'=>$user]);
        }
        else{
            return back()->with('error','Wrong Credentials!'); 
        }
    }

    public function admin_logout(){
        session_start();
        session_destroy();
        return view('admin_login');
    }

    public function admin_profile_view(){
        session_start();
        $email = $_SESSION['email'];
        $adminProfile = DB::select('select * from admin where email = ?',[$email]);
        return view('admin_profile',['adminProfile',$adminProfile]);
    }

    public function viewDashboard(){
        $user = DB::table('users')->get();
        return view('admin_dashb',['user'=>$user]);
    }

    public function deluser($id) {
        DB::delete('delete from users where id = ?',[$id]);
        $user = DB::table('users')->get();
        return view('admin_dashb',['user'=>$user]);
     }
}
