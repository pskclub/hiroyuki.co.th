<?php

namespace App\Http\Controllers;


use App\Setting;
use Illuminate\Http\Request;
use Mailgun\Mailgun;

class MainController extends Controller
{
    public function index()
    {
        return $this->home();
    }

    public function home()
    {
        return view('page.main');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function sendContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'tel' => 'required',
        ]);

        $mgClient = new Mailgun('key-5812076ae7940a4ea2fe0c481ac8c30b');
        $domain = "https://api.mailgun.net/v3/chlom.com";
        $mgClient->sendMessage("$domain",
            array('from' => 'Hiroyuki.co.th <support@chlom.com>',
                'to' => Setting::find(1)->email,
                'subject' => '[การติดต่อ] จาก ' . $request->name . ' เรื่อง ' . $request->subject,
                'html' =>
                    'Name : ' . $request->name . '<br><br>' .
                    'Email : ' . $request->email . '<br><br>' .
                    'Phone : ' . $request->tel . '<br><br>' .
                    'Company : ' . $request->company . '<br><br>' .
                    'Subject : ' . $request->subject . '<br><br>' .
                    'message : ' . $request->message . '<br><br>'
            ));


        return redirect()->back()->with('success', true);
    }


    public function network()
    {
        return view('page.network');
    }
}
