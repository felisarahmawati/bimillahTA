<?php

namespace App\Http\Controllers\Petugas\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        return view("admin.dashboard.users.anggota.index");
    }
}
