<?php

use App\Http\Controllers\BlockchainController;
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

Route::get('/', function () {return view('welcome');});
// Route::get('/innar', function () {return view('inner-page');});
// Route::get('/portfolio', function () {return view('portfolio-details');});

Route::post('block', [BlockchainController::class, 'main'])->name('createNewBlock');

Route::get('/block', function () {return view('portfolio-details');})->name('salom');
