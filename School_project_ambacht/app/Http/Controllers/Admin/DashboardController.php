<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {

    	$users = User::all();

    	return view('admin.register')->with('users',$users);

    }
    // here we create fuction for edit users
    public function registeredit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.register-edit')->with('users',$users);
    }

    // here we create function for update button
    public function registerupdate(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'public' => 'boolean',
            'phoneNumber' => '',
            'usertype' => '',
            'password' => 'required|confirmed|min:8|max:255',
        ]);

    	$users = User::find($id);
    	$users->name = $request->name;
    	$users->email = $request->email;
    	$users->public = $request->public;
    	$users->phoneNumber = $request->phoneNumber;
    	$users->usertype = $request->usertype;
        $users->password = Hash::make($request->password);
    	$users->update();

    	return redirect('/role-register')->with('status','data is updated');
    }
    //delete function
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status','data deleted');

    }
}
