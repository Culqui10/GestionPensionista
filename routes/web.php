<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return redirect('/login');
});

// Ruta para el dashboard predeterminado de Jetstream (redirigida a /admin)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Redirigir después del login al admin en lugar de dashboard
    Route::get('/dashboard', function () {
        return redirect()->route('admin.index');
    })->name('dashboard');

    // Ruta para el admin dashboard
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware(['auth:sanctum', 'verified']);
    //Route::resource('/', Payment_MethodsController::class)->names('admin.payment_methods');

});