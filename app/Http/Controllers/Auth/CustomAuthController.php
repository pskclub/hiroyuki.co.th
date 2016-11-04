<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function getAdminLogin()
    {
        if (Auth::check() && Auth::user()->type == 'ADMIN') {
            return redirect('/admin');
        }
        return view('admin.page.login');
    }


    public function postAdminLogin(LoginRequest $request)
    {

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'type' => 'admin'], $request['remember'])) {
            return redirect(url()->previous());
        } else {
            return back()->with('err', "อีเมลหรือรหัสผ่านไม่ถูกต้อง");
        }

    }


    public function getAdminLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }


}
