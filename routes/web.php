<?php

use App\Http\Controllers\Pages\BookPageController;
use App\Http\Controllers\Pages\VisitorController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('index');
})->name('home');

Route::prefix('/visitor')->group(function () {
    Route::post('/', [VisitorController::class, 'store']);
});

Route::get('/books/{book}', BookPageController::class)->name('book');

Route::get('/care', fn()=>Inertia::render('care'));

Route::get('/appearance', fn()=>Inertia::render('appearance'));

Route::get('/info', fn()=>Inertia::render('info'));

Route::get('/inventory', fn()=>Inertia::render('inventory'));

Route::get('/varities', fn()=>Inertia::render('varities'));