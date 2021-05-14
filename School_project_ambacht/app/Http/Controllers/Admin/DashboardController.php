<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function list()
    {

    	$users = User::all();

    	return view('admin.users.list')->with('users',$users);

    }
    // here we create fuction for edit users
    public function updateUserView(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.users.edit')->with('users',$users);
    }

    // here we create function for update button
    public function updateUserPut(Request $request, $id)
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

    	return redirect('/admin/users')->with('status','User is updated');
    }

public function createUserView()
{
    return view('admin.users.create');
}

    public function createUserPost(Request $request)
    {

        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users',
            'public' => 'boolean',
            'phoneNumber' => '',
            'usertype' => '',
            'password' => 'required|confirmed|min:8|max:255',
        ]);

    	User::create([
    	'name' => $request->name,
    	'email' => $request->email,
    	'public' => $request->public,
    	'phoneNumber' => $request->phoneNumber,
    	'usertype' => $request->usertype,
        'password' => Hash::make($request->password)
        ]);

    	return redirect('/admin/users')->with('status','User is created');
    }

    //delete function
    public function deleteUser($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/admin/users')->with('status','User deleted');

    }
}
