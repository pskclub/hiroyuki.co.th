<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(25);
        return view('admin.page.product.index', compact('products'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'category' => 'required|integer',
            'image' => 'image',
        ]);


        $product = new Product();
        $product->name = $request->name;
        $product->code = $request->code;
        $product->category_id = $request->category;
        $product->description = $request->description;
        if ($request->hasFile('image')) {

            $imageName =
                str_random(10)
                . str_random(10)
                . time() . "."
                . $request->file('image')
                    ->getClientOriginalExtension();

            $path = $request->file('image')->storeAs(
                "product", $imageName, 'public'
            );
            $product->image = $path;
        }
        $product->save();

        return redirect('admin/product');

    }

    public function update(Request $request,$product_id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'category' => 'required|integer',
            'image' => 'image',
        ]);


        $product =  Product::findOrFail($product_id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->category_id = $request->category;
        $product->description = $request->description;
        if ($request->hasFile('image')) {

            $imageName =
                str_random(10)
                . str_random(10)
                . time() . "."
                . $request->file('image')
                    ->getClientOriginalExtension();

            $path = $request->file('image')->storeAs(
                "product", $imageName, 'public'
            );
            $product->image = $path;
        }
        $product->save();

        return redirect('admin/product');

    }

    public function delete($product_id)
    {
        $product = Product::findOrFail($product_id);
        $product->delete();

        return redirect('admin/product');
    }

    public function edit($product_id)
    {
        $product = Product::findOrfail($product_id);
        return view('admin.page.product.edit',compact('product'));
    }
}
