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
        $mgClient = new Mailgun('key-5812076ae7940a4ea2fe0c481ac8c30b');
        $domain = "https://api.mailgun.net/v3/chlom.com";
        $mgClient->sendMessage("$domain",
            array('from' => 'Hiroyuki.co.th <support@chlom.com>',
                'to' => Setting::find(1)->email,
                'subject' => 'Hiroyuki.co.th ติดต่อ',
                'text' => 'กรุณาคลิกที่ลิ้งค์เพื่อยืนยันการสมัครสมาชิก '));
    }
}
