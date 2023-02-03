<?php

use App\Http\Controllers\admin\adminPanelController;
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
require __DIR__.'/admin.php';

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('isAdmin')->group(function () {
    Route::get('/dashboard',[adminPanelController::class, 'index'])->name('dashboard');
    route::post('/logout', [adminPanelController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
