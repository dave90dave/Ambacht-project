<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function users()
    {
    	$users = User::all();

    	return view('admin.users')->with('users',$users);

    }
    // Here we create function for editing users
    public function useredit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.user-edit')->with('users',$users);
    }

    // here we create function for update button
    public function userupdate(Request $request, $id)
    {
    	$users = User::find($id);
    	$users->name = $request->input('username');
    	$users->usertype = $request->input('usertype');
    	$users->update();

    	return redirect('/users')->with('status','data is updated');
    }
    //delete function
    public function userdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/users')->with('status','data deleted');

    }
}
