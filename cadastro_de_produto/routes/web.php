<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\UserController;

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
    return view('home');
});
Route::get('/cadastro', [CadastroController::class, 'index']);
Route::post('/cadastro', [CadastroController::class, 'cadastro']);

Route::get('/catagolo-de-produto', [UserController::class, 'index']);
Route::get('/catagolo-de-produto/edit/{id}', [UserController::class, 'edit']);
Route::delete('/catagolo-de-produto/{id}', [UserController::class, 'destroy']);
Route::put('/catagolo-de-produto/update/{id}', [UserController::class, 'update']);