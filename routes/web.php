<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MadingController;
use App\Http\Controllers\Petugas\Laporan\L_MadingController;
use App\Http\Controllers\Petugas\Laporan\L_AnggotaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\Akun\LoginController;
use App\Http\Controllers\KatalogBukuController;
use App\Http\Controllers\Petugas\PetugasController;
use App\Http\Controllers\Petugas\Account\ProfilSayaController;
use App\Http\Controllers\Account\ProfilSayaController as AccountProfilSayaController;
use App\Http\Controllers\Petugas\Account\AkunController;
use App\Http\Controllers\Petugas\Account\AnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ["guest"]], function(){
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
});

Route::controller(ProfilSayaController::class)->group(function() {
    Route::get("/admin/dashboard/users/profil_saya/v_index", 'index');
    Route::resource("/update_profil", 'update_profil');
    Route::put("/ubah_password", "ubah_password");
});

Route::controller(KatalogBukuController::class)->group(function () {
    Route::get("/admin/dashbaord/master/katalog_buku/v_index", "index");
});

Route::controller(BukuController::class)->group(function () {
    Route::get("/admin/dashbaord/master/buku/v_index", "index");
});

Route::controller(MadingController::class)->group(function () {
    Route::get("/admin/dashbaord/master/mading/v_index", "index");
});

Route::controller(JurusanController::class)->group(function () {
    Route::get("/admin/dashbaord/master/jurusan/v_index", "index");
});

Route::controller(L_MadingController::class)->group(function(){
    Route::get("/admin/dashboard/laporan/laporan_mading", "index");
});

Route::controller(L_AnggotaController::class)->group(function(){
    Route::get("/admin/dashboard/laporan/v_anggota", "index");
});

Route::get("/logout", [LoginController::class, "logout"]);

Route::controller(PetugasController::class)->group(function(){
    Route::get("/admin/dashboard/landingdash", 'index')->name('landingdash');
});

//akun petugas
Route::controller(AkunController::class)->group(function(){
    Route::get("/admin/dashboard/users/index", "index");
});

//akun anggota
Route::controller(AnggotaController::class)->group(function(){
    Route::get("/admin/dashboard/users/anggota/index", "index");
});

Route::group(["middleware" => ["auth::admin"]], function() {
    Route::get('/landingdash', [PetugasController::class, 'index']);
});

Route::get('/anggota/index', [HomeController::class, 'index']);

Auth::routes();
