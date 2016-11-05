<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function categoryList()
    {
        $categories = Category::all();
        return view('page.products.category', compact('categories'));
    }

    public function productByCategoryId($category_id)
    {
        $category = Category::findOrFail($category_id);
        $products = Product::where('category_id', $category_id)->paginate(36);
        return view('page.products.product_by_category', compact('products','category'));
    }

    public function sendMail(Request $request){

    }
}
