<?php

namespace App\Http\Controllers\Petugas\Account;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilSayaController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.users.profil_saya.v_index");
    }

    // public function update(Request $request, $id)
    // {

    //     request()->validate([
    //         'username'  => 'required|string|min:2|max:100',
    //         'email'     => 'required|email|unique:users,email, ' . $id . ',id',
    //     ]);

    //     $user = User::find($id);
    //     $user->username = $request->username;
    //     $user->email = $request->email;

    //     return back()->with('message', 'Data Profil Berhasil Diubah!');
    // }

    // public function ubah_password(Request $request)
    // {
    //     if ($request->konfirmasi_password != $request->password_baru) {
    //         return back()->with("message", "Konfirmasi Password Tidak Sesuai");
    //     } else {
    //         User::where("id_users", Auth::user()->id_users)->update([
    //             "password" => bcrypt($request->password)
    //         ]);

    //         return back()->with('message', 'Data Password Berhasil Diubah!');
    //     }
    // }
}
