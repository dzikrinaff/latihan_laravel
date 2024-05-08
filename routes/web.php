<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

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

route::get('siswa',function (){
    return Siswa::all();

});
route::get('NamaSiswa',function (){
    return view('nama_siswa');

});

route::get('DaftarWarga',function (){
    return view('daftar_warga');

});
