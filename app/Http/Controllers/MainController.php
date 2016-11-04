<?php

namespace App\Http\Controllers;

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

    public function network()
    {
        return view('page.network');
    }
}
