<?php

use App\Http\Controllers\dashboard\indexController;
use App\Http\Controllers\dashboard\PaymentController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\dashboard\StoreController;
use App\Http\Controllers\mainProject\HomeController;
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

//info  main project
Route::prefix('/Home')->group(function() {
    Route::get('/index',[HomeController::class,'index'])->name('index');
    Route::get('/{id}',[HomeController::class,'show'])->name('show');
    Route::post('/index',[HomeController::class,'search'])->name('frontend.search');
    Route::get('/product_listview',[HomeController::class,'product_listview'])->name('product_listview');

});

require __DIR__ . '/auth.php';

//CROD info Store
Route::prefix('/Store')->middleware('auth','verified')->group(function() {
    Route::get('/',[StoreController::class,'index'])->name('Store');
    Route::post('/', [StoreController::class, 'store'])->name('Store.add');
    Route::get('/edit/{id}', [StoreController::class,'edit'])->name('Store.edit');
    Route::patch('/update/{id}', [StoreController::class, 'update'])->name('Store.update');
    Route::get('/{id}', [StoreController::class, 'show'])->name('Store.show');
    Route::delete('/{id}', [StoreController::class, 'destroy'])->name('Store.destroy');
});

//CROD info Product
Route::prefix('/Product')->middleware('auth','verified')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('Product');
    Route::post('/', [ProductController::class, 'store'])->name('Product.add');
    Route::get('/edit/{id}', [ProductController::class,'edit'])->name('Product.edit');
    Route::patch('/update/{id}', [ProductController::class, 'update'])->name('Product.update');
    Route::get('/{id}', [ProductController::class, 'show'])->name('Product.show');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('Product.destroy');
    Route::post('/changeStatus',[ProductController::class,'changeStatus'])->name('Product.status');
});

//CROD info Payment
Route::prefix('/Payment')->middleware('auth','verified')->group(function(){
    Route::get('/',[PaymentController::class,'index'])->name('Payment');
    Route::Post('/',[PaymentController::class,'store'])->name('Home.store');
    Route::delete('/{id}', [PaymentController::class, 'destroy'])->name('Payment.destroy');
});

//CROD info home dashboard
Route::prefix('/index')->middleware('auth','verified')->group(function(){
    Route::get('/homme',[indexController::class,'index'])->name('dashboard.index');
    Route::Post('/',[PaymentController::class,'store'])->name('Home.store');
    Route::get('/edit/{id}', [PaymentController::class,'edit'])->name('Payment.edit');
    Route::patch('/update/{id}', [PaymentController::class, 'update'])->name('Payment.update');
    Route::get('/{id}', [PaymentController::class, 'show'])->name('Payment.show');
    Route::delete('/{id}', [PaymentController::class, 'destroy'])->name('Payment.destroy');
});
Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('Home', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('St', function () {
    return view('dashboard.index2');
})->middleware(['auth', 'verified'])->name('index2');

Route::get('Pr', function () {
    return view('dashboard.index3');
})->middleware(['auth', 'verified'])->name('index3');
Route::get('Py', function () {
    return view('dashboard.index4');
})->middleware(['auth', 'verified'])->name('index4');




