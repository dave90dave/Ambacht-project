<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
public function list()
{
    $data= Product::all();
    return view('admin.products.list', ['products'=>$data]);
}
public function createUserView()
    {
        return view('admin.products.create');
    }

public function createUserPost(Request $request)
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
public function updateProductView(Request $request, $id)
{
    $data = Product::findOrFail($id);
    return view('admin.products.edit')->with('products',$data);
}

// here we create function for update button
public function updateProductPut(Request $request, $id)
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

    return redirect('/admin/products')->with('status','data is updated');
}
//delete function
public function deleteProduct($id)
{
    $data = Product::findOrFail($id);
    $data->delete();

    return redirect('/admin/products')->with('status','data deleted');

}
}
