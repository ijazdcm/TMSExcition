<?php

namespace App\Service;


use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;


class AdminLoginService
{

    use Authenticatable;

    public function authenticate($request)
    {


        if (Auth::attempt(["username"=>$request->username,"password"=>$request->password],$remember=true)) {
            return redirect()->intended('admin.dashboard');
        }

    }
}
