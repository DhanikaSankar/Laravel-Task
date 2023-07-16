<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){

        return view('user.dashboard');
    }

    public function edit($id){
        $user =User::find(decrypt($id));
        return view('user.edit',compact('user'));
    }

    public function update(UserRequest $request)
    {
        // $credential = $request->validated();

        $userId = decrypt($request->id);
        $user = User::find($userId);
        $user->update([
            'name'=> $request->name,
            'place'=> $request->place,
            'email'=> $request->email,
            'mobile'=> $request->mobile,
        ]);

        return redirect()->route('dashboard')->with('success','User Details Updated Successfully');
    }
}
