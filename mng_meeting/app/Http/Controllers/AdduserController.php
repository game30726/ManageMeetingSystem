<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\groupuser;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdduserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $groupuser =groupuser::all();
        return view('admin/adduser/form',['users' => $users , 'groupuser' => $groupuser]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'status' => 'required|max:50'
        ]);

        $adduser = new adduser;

        $adduser->status = $request->status;

        $adduser->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $groupuser = groupuser::find($id);
        return view('admin/adduser/addform',['users' => $users , 'groupuser' => $groupuser]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $srt = $id;

        $srt_meeting = substr($srt, strpos($srt, '.'));

        $meeting_id = Str::substr($srt_meeting, 1);

        $user_id =  str_replace($srt_meeting, '', $srt) ;

        $request->validate([
            'status'=>'required',
          ]);
    
          $add = new MeetingUser();
          $add->user_id = $user_id;
          $add->status = $request->get('status');
          $add->groupuser_id = $groupuser_id;
          $add->save();
        return redirect('/admin/adduser');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function adminindex()
    {
        return view('admin/indexchoose');
    }

}
