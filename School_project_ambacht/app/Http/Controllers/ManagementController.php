<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Market;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function products()
    {
        $products = Product::all();

        return view("management.products", compact("products"));
    }

    public function markets()
    {
        $loggedInUserId = Auth::id();
        $markets = Market::all()->where("user_id", "=", $loggedInUserId);


        return view("management.markets", compact("markets"));
    }
}
