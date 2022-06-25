<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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
// Pizzas resource
Route::get('/', function () {
    return redirect('/pizzas');
});
Route::get('/pizzas', [PizzaController::class,'index'])->name('pizzas.index');
Route::get('/pizzas/create', [PizzaController::class,'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [PizzaController::class,'show'])->name('pizzas.show');
Route::post('/pizzas', [PizzaController::class,'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->name('pizzas.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
