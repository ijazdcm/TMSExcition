<?php

namespace App\Service;

use App\Models\AdminModels\AdminLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginService
{
    public function authenticate($request)
    {
        $auth = AdminLogin::where('username', $request->username)->first();
        if ($auth != null) {
            if (Hash::check($request->password, $auth->password)) {
                Session::put('Admin', $auth);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
