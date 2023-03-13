<?php

namespace App\Http\Controllers\Admin\Autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("admin.akun.login");
    }

    public function post_login(Request $request)
    {
        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password])) {
            $request->session()->regenerate();

            return redirect("/landingdash");
        } else {
            return redirect("/admin/login");
        }
    }

    public function logout()
    {
        Auth::guard("admin")->logout();

        return redirect("/admin/login");
    }
}
