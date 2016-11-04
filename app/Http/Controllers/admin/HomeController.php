<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.page.general');
    }
}
