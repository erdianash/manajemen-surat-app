<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AsingController;
use App\Http\Controllers\NpController;
use App\Http\Controllers\KawinController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\Keterangan_BaikController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\RekapitulasiController;

Route::resource('asing', AsingController::class);
Route::resource('np', NpController::class);
Route::resource('kawin', KawinController::class);
Route::resource('kelahiran', KelahiranController::class);
Route::resource('kematian', KematianController::class);
Route::resource('keterangan_baik', Keterangan_BaikController::class);
Route::resource('pindah', PindahController::class);

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/', function(){
    return view('tracking', ['title'=>'tracking']);
})->name('tracking');
Route::get('/home', function(){
    return view('home', ['title'=>'home']);
})->name('home');

Route::get('/rekapitulasi/show-pdf',[App\Http\Controllers\RekapitulasiController::class,'showRowCounts'])->name('show-pdf');
Route::get('/tracking', function(){
return view('tracking');});
Route::get('/tracking/{name}/{tb_name}', [\App\Http\Controllers\TrackingController::class,'getTrackingSurat'])->name('redirect');

//Route::group(['middleware'=>['auth','cekLevel:staffpelum']], function (){
   // Route::get('/home', function(){
    //return view('home');});
    
    //route::get('/asing',[AsingController::class,'asing'])->name('/asing');
    //route::get('/np',[NpController::class,'np'])->name('/np');
    //route::get('/kawin',[KawinController::class,'kawin'])->name('/kawin');
    //route::get('/pindah',[PindahController::class,'pindah'])->name('/pindah');
    //route::get('/kelahiran',[KelahiranController::class,'kelahiran'])->name('/kelahiran');
    //route::get('/kematian',[KematianController::class,'kematian'])->name('/kematian');
    //route::get('/keterangan_baik',[Keterangan_BaikController::class,'keterangan_baik'])->name('/keterangan_baik');
//});

















//Route::group(['middleware' => 'role:staffpelum'], function () {
    //rute
    
    //});
//Route::group(['middleware' => 'role:kepsipelum'], function () {
        //rute
        
        //});
// Menggunakan middleware grup

