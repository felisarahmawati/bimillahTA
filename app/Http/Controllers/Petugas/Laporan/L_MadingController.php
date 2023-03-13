<?php

namespace App\Http\Controllers\Petugas\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class L_MadingController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.laporan.laporan_mading');
    }
}
