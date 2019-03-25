<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\meeting;
use App\User;
use App\Adduser;
use Alert;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $meeting = meeting::all();
        $data = array(
            'meeting' => $meeting
        );

        return view('meeting.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meeting.form');
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
            'name' => 'required',
            'time' => 'required|numeric',
            'place' => 'required|max:200',
            'date' => 'required|max:100',
            'group_meeting' => 'required',
        ]);

        $meeting = new meeting;

        $meeting->name = $request->name;
        $meeting->time = $request->time;
        $meeting->place = $request->place;
        $meeting->date = $request->date;
        $meeting->group_meeting = $request->group_meeting;

        $meeting->save();

        return redirect('admin/meeting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meeting = meeting::find($id);
        $data = array(
            'meeting' => $meeting
        );
        return view('meeting/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if($id !== ''){
        $meeting = meeting::find($id);

        return view('meeting.edit', compact('meeting'));
      }
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
    $this->validate($request, [
        'name' => 'required',
        'time' => 'required|numeric',
        'place' => 'required|max:200',
        'date' => 'required|max:100',
        'group_meeting' => 'required',
    ]);
    $meeting = meeting::find($id);
    $meeting->name = $request->name;
    $meeting->time = $request->time;
    $meeting->place = $request->place;
    $meeting->date = $request->date;
    $meeting->group_meeting = $request->group_meeting;
    $meeting->save();

    Session::flash('massage','อัพเดทสำเร็จ');
    return redirect('admin/meeting');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = meeting::find($id);
        $meeting->delete();

        return redirect('admin/meeting')->with('success', 'Stock has been deleted Successfully');
    }
}
