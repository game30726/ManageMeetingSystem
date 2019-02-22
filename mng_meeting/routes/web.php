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
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
    Route::group(['middleware' => ['auth']], function () {
        Route::resource('/user', 'UserController');
        Route::resource('/meeting','MeetingController');
        Route::get('/user/home', 'UserController@index');
    });


Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::resource('/meeting','MeetingController');
        Route::resource('/adduser', 'AdduserController');
        Route::resource('/typeadmin', 'TypeAdminController');
        Route::get('admin/meeting/{meeting}', 'MailController@formmail')->name('admin.formmail');
        Route::get('admin/send', 'MailController@sendEmailReminder')->name('admin.sendmail');
        Route::get('/meeting', 'meetingController@index');
        Route::get('admin/adduser/{id}', 'AdduserController@index');
        Route::get('admin/adduser/{adduser}/{groupuser}/edit', 'AdduserController@edit');

        

    });
});

Route::resource('/adddoc','AdddocController');
Route::resource('/profile','ProfileController');
Route::get('admin/meeting/{meeting}','MeetingController@show')->name('meeting.show');
Route::get('edit/{user}','ProfileController@edit');
Route::get('update','ProfileController@update');


