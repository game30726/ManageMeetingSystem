<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{

    public function edit($id)
    {
        $profile = User::find($id);
        return view('edit',['profile' => $profile]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['name'=>'required|max:200','tel'=>'required|numeric','email'=>'required|email']);

        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->tel = $request->tel;
        $profile->email = $request->email;
        $profile->save();

        return redirect('/login');
    }

}
