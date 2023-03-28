<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'show'])->name('home');
Route::get('/infinite-loading', [IndexController::class, 'infiniteLoader'])->name('infiniteLoading');
//Route::get('/demos', [IndexController::class, 'demosPage']);
//Route::post('/send-message', [IndexController::class, 'sendMessage']);

// on 404 page, redirect to home
Route::any('{query}',
    function() { return redirect('/'); })
    ->where('query', '.*');
