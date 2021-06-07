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
        $products = Product::select('*')->orderByDesc('created_at')->limit(4)->get();
        $markets = Market::select('*')->orderByDesc('created_at')->limit(4)->get();
        $profiles = User::select('*')->orderByDesc('created_at')->where('public', '=', '1')->limit(4)->get();
        $categories = Category::select('*')->orderByDesc('created_at')->limit(4)->get();

        return view('home', compact('products', 'markets', 'profiles', 'categories'));
    }

    public function profiles()
    {
        $profiles = User::all()->where('public', '=', '1');
        return view('profiles', compact('profiles'));
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'keyword' => 'required',
            'location' => '',
            'category' => '',
        ]);
        $keyword = $validated['keyword'];
        $location = $validated['location'];
        $category = $validated['category'];

        $products = Product::where('name' | 'description', $keyword);
        $products = Product::where('location', $location);
        $products = Product::where('category_id', $category);
        dd($keyword, $location, $category, $products);
    }

    public function Profile(Request $request)
    {
        $selectedProfile = User::FindorFail($request->id);
        if ($selectedProfile->public == 0){
            abort(403);
        } else {
            $selectedProfile->activeInRegions = "Hier komen de regio's waar de gebruiker actief is.";

            return view("profile", compact('selectedProfile'));
        }
    }

    public function uploadImage()
    {
        return view('profilePhotoUpload');

    }

    public function saveImage(Request $request)
    {
        $id = "1";//userid;


        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
        ]);

        $name = $request->file('image')->getClientOriginalName();

        $path = $request->file('image')->store('public/images');

        $data = User::find($id);
        $data->photo = $path;

        $data->update();

        return redirect('/profile/photo')->with('status', 'Profile photo is updated');

    }

}
