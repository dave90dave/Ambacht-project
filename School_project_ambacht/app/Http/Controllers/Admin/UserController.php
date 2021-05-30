<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function list()
    {

    	$users = User::all();

    	return view('admin.users.list')->with('users',$users);

    }
    // here we create fuction for edit users
    public function updateUserView(Request $request, $id)
    {
    	$user = User::findOrFail($id);
    	return view('admin.users.edit')->with('user',$user);
    }

    // here we create function for update button
    public function updateUserPut(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'public' => 'boolean',
            'phoneNumber' => '',
            'usertype' => '',
            'password' => 'required|confirmed|min:8|max:255',
        ]);

    	$users = User::find($id);
    	$users->name = $validated['name'];
    	$users->email = $validated['email'];
    	$users->public = $validated['public'];
    	$users->phoneNumber = $validated['phoneNumber'];
    	$users->usertype = $validated['usertype'];
        $users->password = Hash::make($validated['password']);
    	$users->update();

    	return redirect('/admin/users')->with('status','User is updated');
    }

public function createUserView()
{
    return view('admin.users.create');
}

    public function createUserPost(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users',
            'public' => 'boolean',
            'phoneNumber' => '',
            'usertype' => '',
            'password' => 'required|confirmed|min:8|max:255',
        ]);

    	User::create([
    	'name' => $validated['name'],
    	'email' => $validated['email'],
    	'public' => $validated['public'],
    	'phoneNumber' => $validated['phoneNumber'],
    	'usertype' => $validated['usertype'],
        'password' => Hash::make($validated['password'])
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
