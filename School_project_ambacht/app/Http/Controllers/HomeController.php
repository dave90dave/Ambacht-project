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
        $keyword = $request->input('keyword');
        $location = $request->input('location');
        $category = $request->input('category');

        $products = Product::where('name' | 'description', $keyword);
        $products = Product::where('location', $location);
        $products = Product::where('category_id', $category);
        dd($products);
        dd($keyword, $location, $category);
    }

    public function Profile(Request $request)
    {
        $selectedProfile = User::FindorFail($request->id);
        if ($selectedProfile->public == 0){
            abort(403);
        } else {
            $name = $selectedProfile->name;
            $createdAt = $selectedProfile->created_at;
            $updatedAt = $selectedProfile->updated_at;

            $workExperience = $selectedProfile->workExperience;
            $smallBiography = $selectedProfile->smallBiography;
            $motivation = $selectedProfile->motivation;
            $intrests = $selectedProfile->interests;
            $website = $selectedProfile->website;
            $hobbies = $selectedProfile->hobbies;


            $activeInRegions = "Hier komen de regio's waar de gebruiker actief is.";

            return view("profile", compact("name", "workExperience", "smallBiography", "activeInRegions", "createdAt", "updatedAt"));
        }


    }
}
