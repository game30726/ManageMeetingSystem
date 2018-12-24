<?php

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
Route::resource('/meeting','MeetingController');

Route::resource('/adddoc', 'AdddocController');

Route::resource('/adduser', 'AdduserController');

Route::get('/', function (){
    if(Auth::check()) {
        return redirect('/meeting');
    } else {
        return view('welcome');
    }
});

Route::get('/login', function () {
    if(Auth::check()) {
        return redirect('/meeting');
    } else {
        return view('auth.login');
    }
});

Auth::routes();

Route::get('/meeting', 'meetingController@index');

Route::get('/adduser', 'AdduserController@create');

Route::post('/toadduser', 'AdduserController@show');

Route::get('/SweetAlert/{alertType?}', ['as'=>'SweetAlert','uses'=>'SweetAlertDemo@index']);

Route::get('meeting.index/routes', 'MeetingController@index')->middleware('admin');


// Administrator & SuperAdministrator Control Panel Routes
Route::group(['middleware' => ['role:administrator']], function () {
Route::resource('users', 'UsersController');
Route::resource('permission', 'PermissionController');
Route::resource('roles', 'RolesController');
    });
    // Dashboard



