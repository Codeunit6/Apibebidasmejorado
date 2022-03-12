<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiCartasController;

//Ruteo de la api
Route::get('/index', [ApiController::class,'inicio'])->name('index');
Route::get('detalle/{id}', [ApiController::class,'detalle'])->name('detalle');
Route::get('detalleingrediente/{in}', [ApiController::class,'informacion'])->name('detallei');
Route::get('/', function(){
    return view('elements');
})->name('inicio');
Route::get('/noalcohilicas',[ApiController::class,'noalcohol'])->name('noalcohol');
Route::get('/alcohol',[ApiController::class,'alcohol'])->name('alcohol');
Route::get('/api/bebidas',[ApiController::class,'apivodka'])->name('api');
//JSON de api
Route::get('/api/bebidasalcoholicas',[ApiController::class,'apialcohol'])->name('apialcohol');
Route::get('/api/bebidasnoalcoholicas',[ApiController::class,'apinoalcohol'])->name('apinoalcohol');

//Documentacion
Route::get('/getting', function(){
    return view('get.getting');
})->name('getting');

//Nosotros
Route::get('/nosotros', function(){
    return view('about');
})->name('nosotros');
//Busqueda de bebida
Route::get('detalleapi/{data}',[ApiController::class,'detalleapi'])->name('detalleapi');

//Api de cartas
Route::get('/cartas',[ApiCartasController::class,'cartas'])->name('cartas');
Route::get('detallecarta/{id}',[ApiCartasController::class,'detallecarta'])->name('detallecarta');

//Autentificacion de logueo
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
