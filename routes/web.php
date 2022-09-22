<?php

use Illuminate\Support\Facades\Route;
use App\http\Controller\UserController;
use App\Http\Controllers\StudentController;
use App\Models\student;

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
Route::get('/users', [UserController::class, 'create']);
Route::get('/', [StudentController::class, 'index']);
Route::get('create', [StudentController::class, 'create'])->name('create');
Route::get('/', function () {
    return view('index');
});