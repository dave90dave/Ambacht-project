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
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'numeric',
            'per_unit' => 'numeric',
            'amount' => 'numeric',
            'photo' => '',
            'active' => '',
            'description' => ''
        ]);

        Product::create($validated);

            return redirect('/admin/products')->with('status','Product is created');
    }


    // here we create fuction to edit markets
    public function updateProductView(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        return view('admin.products.edit')->with('products',$data);
    }

    // here we create function for update button
    public function updateProductPut(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'price' => '',
            'per_unit' => '',
            'amount' => '',
            'photo' => '',
            'active' => 'boolean',
            'description' => 'max:300',
        ]);

        $data = Product::find($id);
        $data->name = $validated['name'];
        $data->price = $validated['price'];
        $data->per_unit = $validated['per_unit'];
        $data->amount = $validated['amount'];
        $data->photo = $validated['photo'];
        $data->active = $validated['active'];
        $data->description = $validated['description'];
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
