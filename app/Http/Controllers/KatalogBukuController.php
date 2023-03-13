<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KatalogBukuController extends Controller
{
    public function message()
    {
        $message = [
            "unique" => "Kolom :attribute Tidak Boleh Sama",
            "required" => "Kolom :attribute Tidak Boleh Kosong"
        ];

        return $message;
    }

    public function index()
    {
        $data["katalogs"] = Katalog::get();

        return view('admin.dashboard.master.katalog_buku.v_index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "id_katalog" => "required|unique:katalog_buku",
            "nama_katalog" => "required"
        ], $this->message());

        $katalog = new Katalog;
        $katalog->id_katalog = $request['id_katalog'];
        $katalog->nama_katalog = $request['nama_katalog'];
        $katalog->slug = Str::slug($katalog->nama_katalog);

        $katalog->save();

        return back()->with('message', 'Katalog Berhasil Ditambahkan!');
    }
}
