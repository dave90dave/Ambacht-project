<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboard extends Controller
{
    public function index()
    {

        $idLoggedinUser = Auth::user()->id;

        $marketsActive = Market::UserMarketsActive($idLoggedinUser);
        $productsActive = Product::UserProductsActive($idLoggedinUser);
        $profileStatus = User::find($idLoggedinUser)->public;

        return view('admin.dashboard', compact("marketsActive", "productsActive", "profileStatus"));
    }
}
