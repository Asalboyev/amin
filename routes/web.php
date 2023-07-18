<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PraductsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TelegramController;

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


Route::get('/lang/{lang}', function ($lang) {
    session(['lang'=>$lang]);
    return back();
});
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('catalog/{category_id}', [MainController::class, 'catalog_products'])->name('catalog_products');
Route::get('/product/{slug}', [MainController::class, 'productDetail'])->name('productDetail');
Route::post('/send-message', [TelegramController::class, 'sendMessage'])->name('telegram.send_message');
Route::post('/index-message', [TelegramController::class, 'indexMessage'])->name('telegram.index_message');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories',   CategoriesController::class);
    Route::resource('products',   PraductsController::class);
    Route::post('/products-image-upload',[PraductsController::class,'upload'])->name('upload');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
