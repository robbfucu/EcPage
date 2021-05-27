<?php

use App\Mail\ContactoMail;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', function (Request $request) {
    Mail::to('site@iciindustrial.com')->send(new ContactoMail($request));
})->name('contacto');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/marcas', function () {
    return view('marcas')->with([
        'marcas' => Marca::all()
    ]);
})->name('marcas');

Route::get('/aplicaciones', function () {
    return view('aplicaciones');
})->name('aplicaciones');

Route::get('/index2.html', function () {
    return view('index2');
});

Route::prefix('novedades')->group(function () {
    Route::get('/', function () {
        return view('novedades.index');
    })->name('novedades.index');

    Route::get('{slug}', function () {
        return view('novedades.show');
    })->name('novedades.show');
});

Route::get('/gallery-single.html', function () {
    return view('gallery-single');
});
