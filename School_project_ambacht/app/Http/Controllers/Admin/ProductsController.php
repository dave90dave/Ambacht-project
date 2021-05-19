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
    public function createProductView()
    {
        return view('admin.products.create');
    }

    public function createProductPost(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'numeric',
            'per_unit' => 'numeric',
            'amount' => 'numeric',
            'photo' => '',
            'active' => 'boolean',
            'description' => ''
        ]);
        Product::create($data);

        return redirect('/admin/products')->with('status','Product is created');
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
        $request->validate([
            'name' => 'required|max:30',
            'price' => 'numeric',
            'per_unit' => 'numeric',
            'amount' => 'numeric',
            'photo' => '',
            'active' => 'boolean',
            'description' => 'max:300',
        ]);

        $data = Product::find($id);
        $data->name = $request->name;
        $data->price = $request->price;
        $data->per_unit = $request->per_unit;
        $data->amount = $request->amount;
        $data->photo = $request->photo;
        $data->active = $request->active;
        $data->description = $request->description;
        $data->update();

        return redirect('/admin/products')->with('status','Product is updated');
    }
    //delete function
    public function deleteProduct($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        return redirect('/admin/products')->with('status','Product deleted');

    }
}
