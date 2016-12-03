<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.page.general');
    }

    public function setting()
    {
        $setting = Setting::find(1);
        return view('admin.page.setting',compact('setting'));
    }

    public function setSetting(Request $request)
    {
        $setting = Setting::find(1);
        $setting->email = $request->email;
        $setting->save();
        return redirect('admin/setting');
    }
}
