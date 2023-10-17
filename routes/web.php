<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;

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
    return redirect('dashboard');
});
Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

//User
Route::get('dashboard', [UserController::class, 'dashboard']);



//Admin
Route::get('adminDashboard', [AdminController::class, 'adminDashboard']);
//Batch
Route::get('batchView', [AdminController::class, 'batchView']);
Route::get('addNewBatchForm', [AdminController::class, 'addNewBatchForm']);

//addNewCategory
Route::get('addNewCategory', [AdminController::class, 'addNewCategory']);
Route::get('addNewBatchCategoryForm', [AdminController::class, 'addNewBatchCategoryForm']);
Route::post('newBatchCategory', [AdminController::class, 'newBatchCategory']);
Route::get('deleteBatchCategory/{id}', [AdminController::class, 'deleteBatchCategory']);

//Teacher

Route::get('teacherView', [TeacherController::class, 'teacherView']);
Route::get('addNewTeacherForm', [TeacherController::class, 'addNewTeacherForm']);