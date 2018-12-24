<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdddocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adddoc.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adddoc.form');
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
            'top1' => 'required|max:200',
            'top2' => 'required|max:200',
            'top3' => 'required|max:100',
            'top4' => 'required|max:200',
            'top5' => 'required|max:200',
        ]);

        $adddoc = new adddoc;

        $adddoc->top1 = $request->top1;
        $adddoc->top2 = $request->top2;
        $adddoc->top3 = $request->top3;
        $adddoc->top4 = $request->top4;
        $adddoc->top5 = $request->top5;

        $meeting->save();

        return redirect('meeting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        //
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
