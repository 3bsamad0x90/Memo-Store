<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use GuzzleHttp\Middleware;

//category routes
Route::group(['prefix' => 'categories', 'middleware' => 'isAdmin'] ,function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
