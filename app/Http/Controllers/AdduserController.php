<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\meeting;
use App\Adduser;
use Illuminate\Support\Facades\Session;

class AdduserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('meeting.show') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = User::all();
        $meeting = meeting::all();
        return view('adduser/form',compact('users'));
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
            'user_id' => 'required|exists:users,id',
            'meeting_id' => 'required|exists:meetings,id',
            'status' => 'required|max:50'
        ]);

        $adduser = new adduser;

        $adduser->user_id = $request->user_id;
        $adduser->user_id = $request->meeting_id;
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
        $adduser = Adduser::find($id);
        $data = array(
            'meeting' => $meeting,
            'user' => $user
        );
        return view('adduser/form',$data);
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
        //
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

}
