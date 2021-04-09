<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
public function show()
{
    $data= Product::all();
    return view('admin.products', ['products'=>$data]);
}
public function create()
    {

        return view('admin.products-create');
    }

public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'per_unit' => 'required',
            'amount' => 'required',
            'amount' => 'required',
            'photo' => 'required',
            'active' => 'required',
            'description' => 'required'
        ]);

    }


// here we create fuction for edit users
public function registeredit(Request $request, $id)
{
    $data = Product::findOrFail($id);
    return view('admin.products-edit')->with('products',$data);
}

// here we create function for update button
public function registerupdate(Request $request, $id)
{
    $data = Product::find($id);
    $data->name = $request->input('name');
    $data->price = $request->input('price');
    $data->per_unit = $request->input('per_unit');
    $data->amount = $request->input('amount');
    $data->photo = $request->input('photo');
    $data->active = $request->input('active');
    $data->description = $request->input('description');
    $data->update();

    return redirect('/products')->with('status','data is updated');
}
//delete function
public function registerdelete($id)
{
    $data = Product::findOrFail($id);
    $data->delete();

    return redirect('/products')->with('status','data deleted');

}
}
