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

    public function uploadImage()
    {
        return view('uploader.profile');

    }

    public function saveImage(Request $request)
    {
        $id = "1";//userid;


        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
        ]);

        //dd($validated['image']);

        $name = $validated['image']->getClientOriginalName();

        $path = $validated['image']->store('public/images');
        //dd($name, $path);

        $data = User::find($id);
        //dd($path);
        $data->photo = $path;

        $data->update();

        return redirect('/')->with('status', 'Profile photo is updated');

    }
}
