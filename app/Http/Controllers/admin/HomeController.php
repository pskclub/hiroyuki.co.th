<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Setting;
use App\Slide;
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
        $slides = Slide::all();
        return view('admin.page.setting', compact('setting', 'slides'));
    }

    public function setSetting(Request $request)
    {
        $setting = Setting::find(1);
        $setting->email = $request->email;
        $setting->hiroyuki = $request->hiroyuki;
        $setting->features = $request->features;
        $setting->network = $request->network;
        $setting->contact = $request->contact;
        $setting->save();
        return redirect('admin/setting');
    }

    public function updateSlide(Request $request,$id)
    {
        $this->validate($request, [
            'image' => 'image',
        ]);


        $slide =  Slide::findOrFail($id);
        $slide->description = $request->description;
        if ($request->hasFile('image')) {

            $imageName =
                str_random(10)
                . str_random(10)
                . time() . "."
                . $request->file('image')
                    ->getClientOriginalExtension();

            $path = $request->file('image')->storeAs(
                "slide", $imageName, 'public'
            );
            $slide->image = $path;
        }
        $slide->save();

        return redirect('admin/setting');
    }

    public function delSlide($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();

        return redirect('admin/setting');
    }

    public function storeSlide(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image',
        ]);


        $slide = new Slide();
        $slide->description = $request->description;
        $imageName =
            str_random(10)
            . str_random(10)
            . time() . "."
            . $request->file('image')
                ->getClientOriginalExtension();

        $path = $request->file('image')->storeAs(
            "slide", $imageName, 'public'
        );
        $slide->image = $path;
        $slide->save();

        return redirect('admin/setting');

    }
}
