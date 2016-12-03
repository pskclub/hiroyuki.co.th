<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;
use Mailgun\Mailgun;

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
        return view('page.products.product_by_category', compact('products', 'category'));
    }

    public function sendMail(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'message' => 'required',
        ]);

        $product = Product::find($request->product_id);
        $mgClient = new Mailgun('key-5812076ae7940a4ea2fe0c481ac8c30b');
        $domain = "https://api.mailgun.net/v3/chlom.com";
        $mgClient->sendMessage("$domain",
            array('from' => 'Hiroyuki.co.th <support@chlom.com>',
                'to' => Setting::find(1)->email,
                'subject' => '[สอบถามราคา] จาก ' . $request->name,
                'html' =>
                    'Name : ' . $request->name . '<br><br>' .
                    'Email : ' . $request->email . '<br><br>' .
                    'Phone : ' . $request->tel . '<br><br>' .
                    'Company : ' . $request->company . '<br><br>' .
                    'Subject : สอบถามราคา' . '<br><br>' .
                    'message : ' . $request->message . '<br><br><hr>' .
                    '<h4>เกี่ยวกับสินค้า</h4><br>' .
                    'Name : ' . $product->name . '<br><br>' .
                    'Description : ' . $product->description . '<br><br>' .
                    'Picture : <img style="max-width:100%" src="' . $product->image . '">'

            ));

        return redirect()->back()->with('success', true);
    }
}
