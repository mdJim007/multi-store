<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationController;
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
    return view('web.welcome');
});

Route::get('/single', function () {
    return view('single-page');
});

Route::get('/test', function () {
    dd( htmlspecialchars('Product & ASL') );
});

Route::get( 'dashboard', [ DashboardController::class, 'index' ] );

Route::resource( 'locations', LocationController::class );
Route::resource( 'categories', CategoryController::class );
