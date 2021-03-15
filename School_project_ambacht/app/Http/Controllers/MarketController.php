<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class MarketController extends Controller
{
    public function index()
    {
        $markets = Market::all();

        return $markets;
    }
}
