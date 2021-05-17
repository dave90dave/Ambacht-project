<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Market;

class ReviewController extends Controller
{
    public function select()
    {
        return view('admin.review.select');
    }

    public function productList()
    {
        $product = Product::all()->where('sent_for_review', '=', '1')->where('pending_review', '=', null)->where('active', '=', '1')->sortByDesc('updated_at');

        return view('admin.review.product.list', ['products'=>$product]);
    }

    public function marketList()
    {
        $market = Market::all()->where('sent_for_review', '=', '1')->where('pending_review', '=', null)->where('active', '=', '1')->sortByDesc('updated_at');

        return view('admin.review.market.list', ['markets'=>$market]);
    }

    public function approve(Request $request)
    {
        $id = $request->id;
        $table = $request->table;

        dd($id, $table);
    }

    public function refuse(Request $request)
    {
        $id = $request->id;
        $table = $request->table;

        dd($id, $table);
    }
}
