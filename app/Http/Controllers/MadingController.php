<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MadingController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.master.mading.v_index');
    }
}
