<?php

namespace App\Http\Controllers\Akun;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function post_login(Request $request)
    {
        $req = $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        $password = $request->password;
        $user = User::where("email", $request->email)->first();

        if ($user) {
            $cek_password = Hash::check($password, $user->password);

            if (!$cek_password) {
                return back();
            } else {
                Auth::attempt($req);
                if ($user->id_role == 1) {
                    return redirect()->intended("/admin/dashboard/landingdash");
                } else if ($user->id_role == 2) {
                    return redirect("/anggota/index");
                } else {
                    return back();
                }
            }
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/login");
    }
}
