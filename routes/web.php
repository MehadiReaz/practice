<?php

use App\Http\Controllers\StudentController;
use App\Models\student;
use Illuminate\Support\Facades\Route;

/*
@@ -13,6 +15,14 @@
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [StudentController::class, 'index']);

Route::get('create', [StudentController::class, 'create'])->name('create');
Route::post('store', [StudentController::class, 'store'])->name('store');

Route::get('edit/{student_id}', [StudentController::class, 'update'])->name('edit');

Route::post('edit-store', [StudentController::class, 'editStore'])->name('editStore');

Route::delete('delete', [StudentController::class, 'destroy'])->name('delete');