<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;

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

Route::get('/', [PublicController::class, 'index']);
Route::get('/berita', [PublicController::class, 'berita']);
Route::get('/pengumuman', [PublicController::class, 'pengumuman']);
Route::get('/tentang', [PublicController::class, 'tentang']);

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/user', [DashboardController::class, 'user']);
    Route::get('/berita', [DashboardController::class, 'berita']);

    Route::controller(PengumumanController::class)->group(function () {
        Route::get('/pengumuman', 'index');
        Route::get('/pengumuman-create', 'save');
        Route::post('/pengumuman-create', 'create');
        Route::get('/pengumuman/{id}', 'show');
        Route::get('/pengumuman-delete/{id}', 'delete');
        Route::post('/pengumuman/{id}', 'update');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
