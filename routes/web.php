<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;

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
Route::get('courseView/{id}', [UserController::class, 'courseView']);
Route::get('allCourse', [UserController::class, 'allCourse']);



//Admin
Route::get('adminDashboard', [AdminController::class, 'adminDashboard']);
//Batch
Route::get('batchView', [BatchController::class, 'batchView']);
Route::get('addNewBatchForm', [BatchController::class, 'addNewBatchForm']);

Route::post('newBatch', [BatchController::class, 'newBatch']);
Route::get('deleteBatch/{id}', [BatchController::class, 'deleteBatch']);
Route::get('editBatch/{id}', [BatchController::class, 'editBatch']);
Route::post('editBatchSubmit/{id}', [BatchController::class, 'editBatchSubmit']);

//addNewCategory
Route::get('addNewCategory', [AdminController::class, 'addNewCategory']);
Route::get('addNewBatchCategoryForm', [AdminController::class, 'addNewBatchCategoryForm']);
Route::post('newBatchCategory', [AdminController::class, 'newBatchCategory']);
Route::get('deleteBatchCategory/{id}', [AdminController::class, 'deleteBatchCategory']);

//Teacher

Route::get('teacherView', [TeacherController::class, 'teacherView']);
Route::get('addNewTeacherForm', [TeacherController::class, 'addNewTeacherForm']);
Route::post('addNewTeacher', [TeacherController::class, 'addNewTeacher']);
Route::get('deleteTeacherFrom/{id}', [TeacherController::class, 'deleteTeacherFrom']);
Route::get('editTeacherFrom/{id}', [TeacherController::class, 'editTeacherFrom']);
Route::post('editNewTeacher/{id}', [TeacherController::class, 'editNewTeacher']);
Route::get('detailsTeacher/{id}', [TeacherController::class, 'detailsTeacher']);
