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
        $product = Product::all()->where('sent_for_review', '=', '1')->where('approved', '=', null)->where('active', '=', '1')->sortByDesc('updated_at');

        return view('admin.review.product.list', ['products'=>$product]);
    }

    public function marketList()
    {
        $market = Market::all()->where('sent_for_review', '=', '1')->where('approved', '=', null)->where('active', '=', '1')->sortByDesc('updated_at');

        return view('admin.review.market.list', ['markets'=>$market]);
    }

    public function marketApprove(Request $request, $id)
    {
        $users = Market::findorFail($id);
        $users->sent_for_review = true;
        $users->approved = true;
        $users->review_refused_reason = null;
        $users->update();

        return redirect('/admin/review/markets')->with('status','Market is approved');
    }

    public function marketRefuse(Request $request, $id)
    {
        $users = Market::findorFail($id);
        $users->sent_for_review = false;
        $users->approved = false;
        $users->review_refused_reason = 'Ingevulde reden van afwijzing...';
        $users->update();

        return redirect('/admin/review/markets')->with('status','Market is refused');

    }

    public function productApprove(Request $request, $id)
    {
        $users = Product::findorFail($id);
        $users->sent_for_review = true;
        $users->approved = true;
        $users->review_refused_reason = null;
        $users->update();

        return redirect('/admin/review/products')->with('status','Product is approved');
    }

    public function productRefuse(Request $request, $id)
    {
        $users = Product::findorFail($id);
        $users->sent_for_review = false;
        $users->approved = false;
        $users->review_refused_reason = 'Ingevulde reden van afwijzing...';
        $users->update();

        return redirect('/admin/review/products')->with('status','Product is refused');
    }
}
