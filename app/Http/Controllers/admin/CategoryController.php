<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.page.category.index', compact('categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'image' => 'image',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        if ($request->hasFile('image')) {

            $imageName =
                str_random(10)
                . str_random(10)
                . time() . "."
                . $request->file('image')
                    ->getClientOriginalExtension();

            $path = $request->file('image')->storeAs(
                "category", $imageName, 'public'
            );
            $category->image = $path;
        }
        $category->save();

        return redirect('admin/category');

    }

    public function delete($category_id)
    {
        $category = Category::findOrFail($category_id);
        $category->delete();

        return redirect('admin/category');
    }

    public function edit($category_id)
    {
        $category = Category::findOrfail($category_id);
        return view('admin.page.category.edit',compact('category'));
    }

    public function update(Request $request,$category_id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'image' => 'image',
        ]);


        $category =  Category::findOrFail($category_id);
        $category->name = $request->name;
        $category->description = $request->description;
        if ($request->hasFile('image')) {

            $imageName =
                str_random(10)
                . str_random(10)
                . time() . "."
                . $request->file('image')
                    ->getClientOriginalExtension();

            $path = $request->file('image')->storeAs(
                "category", $imageName, 'public'
            );
            $category->image = $path;
        }
        $category->save();

        return redirect('admin/category');
    }

}
