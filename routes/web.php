<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Admin;
use App\Models\Schedules;
use App\Models\Trainer;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {



    $schedules = Schedules::select('*')->get();

    $tdata = Trainer::select('*')->get();

    return view('index', ['data' => $schedules], ['tdata' => $tdata]);


});

Route::get('about', function () {
    return view('about');
});


Route::post('login_admin', 'App\Http\Controllers\AdminController@admin_login');

Route::get('class', function () {
    return view('class');
});



Route::get('team', function () {
    return view('team');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('login', function () {
    return view('login');
});

Route::get('admin_dashb_page', function () {
    $trainer = Trainer::select('*')->get();
    return view('admin_dashb', ['trainer' => $trainer]);
});

Route::get('viewDashboard', 'App\Http\Controllers\AdminController@viewDashboard');



Route::get('admin_login', function () {
    return view('admin_login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('admin_dashboard', function () {
    return view('admin_dashb');
});

Route::get('trainer', function () {
    return view('add_trainer');
});

Route::get('trainer_list', function () {
    return view('trainer_list');
});

Route::get('viewTrainer', 'App\Http\Controllers\TrainerController@viewTrainer');

Route::get('viewTrainerindex', 'App\Http\Controllers\TrainerController@viewTrainerindex');

Route::get('viewTraineruser', 'App\Http\Controllers\TrainerController@viewTraineruser');

Route::get('delTrainer/{id}', 'App\Http\Controllers\TrainerController@delTrainer');

Route::post('add-trainer', 'App\Http\Controllers\TrainerController@addTrainer');

Route::get('schedules', function () {
    return view('add_schedules');
});

Route::post('add-schedules', 'App\Http\Controllers\SchedulesController@addSchedules');

Route::get('viewschedules', 'App\Http\Controllers\SchedulesController@viewschedules');

Route::get('viewschedulesindex', 'App\Http\Controllers\SchedulesController@viewschedulesindex');

Route::get('viewschedulesuser', 'App\Http\Controllers\SchedulesController@viewschedulesuser');

Route::get('delschedules/{id}', 'App\Http\Controllers\SchedulesController@delSchedule');

Route::post('submit', 'App\Http\Controllers\UserController@save');

Route::post('login_admin', 'App\Http\Controllers\AdminController@admin_login');

Route::get('view_user', 'App\Http\Controllers\UserController@getData');

Route::get('view_user_data', 'App\Http\Controllers\UserController@getuserData');

Route::get('admin_logout', 'App\Http\Controllers\AdminController@admin_logout');

Route::get('admin_profile_view/', 'App\Http\Controllers\AdminController@admin_profile_view');

Route::post('login_user', 'App\Http\Controllers\UserController@user_login');

Route::get('user_logout', 'App\Http\Controllers\UserController@user_logout');

Route::get('deluser/{id}', 'App\Http\Controllers\AdminController@deluser');