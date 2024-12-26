<?php

use App\Http\Controllers\admin\ConfigurationController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/type', [UserController::class, 'selectUserType']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/configurations', [ConfigurationController::class, 'index']);
Route::get('/reports', [ReportController::class, 'index']);
