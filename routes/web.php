<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;



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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/about', function () {
    return view('details.about');
})->middleware(['auth'])->name('about');

Route::get('/contact', function () {
    return view('details.contact');
})->middleware(['auth'])->name('contact');
Route::get('/contact/store', [ContactController::class, 'store'])->name('contact.store');  



Route::get('order', [CategoryController::class, 'index'])->name('order');
Route::get('/product/{id}', [ProductController::class, 'index'])->name('product');  

Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('profile');
    })->name('profile');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
});


require __DIR__.'/auth.php';
