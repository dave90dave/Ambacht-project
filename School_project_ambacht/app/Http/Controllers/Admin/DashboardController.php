<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cornford\Googlmapper\Mapper as Mapper;

class DashboardController extends Controller
{
    public function index()
    {

        $id = Auth::user()->id;

        $marketsActive = Market::UserMarketsActive($id);
        $productsActive = Product::UserProductsActive($id);
        $profileStatus = User::find($id)->public;

        return view('admin.dashboard', compact("marketsActive", "productsActive", "profileStatus"));
    }

    public function togglePublic(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findorFail($id);

        if($user->public == false){
            $user->public = true;
            $user->update();
            $state = "public.";
        } else {
            $user->public = false;
            $user->update();
            $state = "hidden.";
        }



        return redirect('/admin')->with('status','Your profile is now ' . $state);
    }

    public function maps()
    {
        Mapper::map(53.434, 1.3423);

		return view('admin.map');
    }
}
