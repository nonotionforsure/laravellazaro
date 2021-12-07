<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SugestoesController;
use App\Http\Controllers\Initial\InicioController;
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

Route::get('/', [InicioController::class, "index"]);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /*  Esse controller é para fazer o check-list do viajante, por isso é ressource, já que precisa do get/delete/edit ...*/
    Route::resource("clviagem", ClviagemController::class);
    Route::get("/sugestoes", [SugestoesController::class, "index"]);
});
