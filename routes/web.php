<?php

use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DressController;
use App\Http\Controllers\OrderdetailController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TownshipController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

});

Route::get('login',[AuthController::class,'loginform'])->name('login');

Route::post('login',[AuthController::class,'login']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

//Category
Route::resource('/category',CategoryController::class);

//Dress
Route::resource('/dress',DressController::class);

//Order
Route::resource('/orderdetail',OrderdetailController::class);
//Shipping
Route::resource('/shipping',ShippingController::class);
//Township
Route::resource('/township',TownshipController::class);
