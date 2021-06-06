<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;

class MarketsController extends Controller
{
    public function list()
    {
        $data= Market::all();
        return view('admin.markets.list', ['markets'=>$data]);
    }
    public function createMarketView()
    {
        return view('admin.markets.create');
    }

    public function createMarketPost(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'location' => '',
            'photo' => '',
            'active' => 'boolean',
            'description' => '',
        ]);

        Market::create($validated);

            return redirect('/admin/markets')->with('status','Market is created');
    }


    // here we create fuction to edit markets
    public function updateMarketView(Request $request, $id)
    {
        $data = Market::findOrFail($id);
        return view('admin.markets.edit')->with('markets',$data);
    }

    // here we create function for update button
    public function updateMarketPut(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'location' => '',
            'photo' => '',
            'active' => 'boolean',
            'description' => '',
        ]);

        $data = Market::find($id);
        $data->user_id = $validated['user_id'];
        $data->name = $validated['name'];
        $data->location = $validated['location'];
        $data->photo = $validated['photo'];
        $data->active = $validated['active'];
        $data->description = $validated['description'];
        $data->update();

        return redirect('/admin/markets')->with('status','Market is updated');
    }
    //delete function
    public function deleteMarket($id)
    {
        $data = Market::findOrFail($id);
        $data->delete();

        return redirect('/admin/markets')->with('status','Market deleted');

    }
}
