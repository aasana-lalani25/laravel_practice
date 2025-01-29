<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\storedemo;
use App\Http\Controllers\FormController;

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
Route::post('/submitForm', [storedemo::class, 'submitForm']);
Route::get('/', [storedemo::class, 'index']);

Route::get('/about', [storedemo::class, 'about']);
Route::get('/contact', [storedemo::class, 'contact']);
Route::get('/shop', [storedemo::class, 'shop']);
Route::get('/checkout', [storedemo::class, 'checkout']);
    