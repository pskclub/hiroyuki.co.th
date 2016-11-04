<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(25);
        return view('admin.page.user.user', compact('users'));
    }

    public function getDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    public function getUpdate($id)
    {
        $user = User::findOrFail($id);
        return view('admin.page.user.edit', compact('user'));
    }

    public function postUpdate(Request $request,$id)
    {
        $user = User::findOrFail($id);
        $user->fullname = $request->fullname;
        $user->type = $request->type;
        $user->save();
        return redirect('admin/user');
    }

    public function getAdd(){
        return view('admin.page.user.add');
    }

    public function postAdd(RegisterRequest $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->type = $request->type;
        $user->save();
        return redirect('admin/user');
    }


}
