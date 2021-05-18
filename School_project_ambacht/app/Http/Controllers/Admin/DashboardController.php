<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $id = Auth::user()->id;

        $marketsActive = Market::active(1)->approved(1)->ofUser($id)->count();
        $productsActive = Product::UserProductsActive($id);
        $profileStatus = User::find($id)->public;

        return view('admin.dashboard', compact("marketsActive", "productsActive", "profileStatus"));
    }
}
