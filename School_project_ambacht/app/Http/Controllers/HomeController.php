<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Market;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        $markets = Market::all();
        $profiles = User::all();
        $categories = Category::all();

        return view('home', compact('products', 'markets', 'profiles', 'categories'));
    }

    public function profile()
    {
        $profiles = User::all();
        return view('profile', compact('profiles'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $location = $request->input('location');
        $category = $request->input('category');

        $products = Product::where('name' | 'description', $keyword);
        $products = Product::where('location', $location);
        $products = Product::where('category_id', $category);
        dd($products);
        dd($keyword, $location, $category);
    }

    public function upload($request)
    {

        if($request->hasFile('image')){
//            $filename = $request->image->getClientOriginalName();
//            $request->image->storeAs('images',$filename,'public');
//            Auth()->user()->update(['image'=>$filename]);

            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('images/profile'.'/'.$fileName, $img, 'public');
        }

    }
}
