<?php

namespace App\Http\Controllers\AdminControlls;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\AdminLoginService;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    //methode to handle the login of admin
    public function login(Request $request, AdminLoginService $auth)
    {
        $this->validate($request, [
            "username" => "required",
            "password" => "required|min:4|max:4"
        ]);
        if ($auth->authenticate($request)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('auth_error', 'Authetication Failed');
        }
    }

    //methode to logout admin 
    public function logout(Request $request)
    {
        Session::pull('Admin');
        return redirect('/');
    }
}
