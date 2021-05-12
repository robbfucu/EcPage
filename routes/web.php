<?php

use App\Models\Marca;
use App\Models\Servicio;
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
})->name('inicio');

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/services.html', function () {
    return view('services');
});

Route::get('/blog-full.html', function () {
    return view('blog-full');
});

Route::get('/marcas', function () {
    return view('marcas')->with([
        'marcas' => Marca::all()
    ]);
})->name('marcas');

Route::get('/aplicaciones.html', function () {
    return view('aplicaciones');
});
