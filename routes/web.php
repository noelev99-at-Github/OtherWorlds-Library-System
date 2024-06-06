<?php

use App\Http\Controllers\accessController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\ErrorHandler\Debug;

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

Route::get('/LogInPage', [accessController::class, 'LogInPage']);
Route::post('/LogInUser', [accessController::class, 'LogInUser'])->name('LogInUser');

Route::get('/createUser', [accessController::class, 'createUser']);
Route::post('/createUser/post', [accessController::class, 'createUserPost'])->name('createUserPost');

Route::get('/homePage', [pageController::class, 'homePage']);

Route::get('/addBook', [pageController::class, 'addBook']);
Route::post('/addBook/store', [pageController::class, 'store']);

Route::get('editBook/{id}', [pageController::class, 'edit']);
Route::post('updateBook/{id}', [pageController::class, 'update']);
Route::get('deleteBook/{id}', [pageController::class, 'destroy']);

Route::get('/LogOut', [accessController::class, 'LogOut']);

