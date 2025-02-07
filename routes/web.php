<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/user/report/create', [UserController::class, 'create']);
Route::post('/user/report/store', [UserController::class, 'store']);
Route::get('/user/reports', [UserController::class, 'viewReports']);
Route::get('/user/help', [UserController::class, 'help']);
Route::get('/user/contact', [UserController::class, 'contact']);


Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate']);
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::get('/admin/reports/{id}/detail', [AdminController::class, 'detail'])->name('admin.reports.detail');
Route::delete('/admin/reports/{id}/delete', [AdminController::class, 'deleteReport'])->name('admin.reports.delete');
Route::post('/admin/reports/{id}/validate', [AdminController::class, 'validateReport'])->name('admin.reports.validate');
Route :: get ('/admin/categories', [CategoryController :: class, 'index'])->name('admin.categories');
Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

Route::get('/admin/add', [AdminController::class, 'showAddForm'])->name('admin.admins.add');
Route::get('/admin/admins', [AdminController::class, 'showAdmins'])->name('admin.admins');

Route::post('/admin/admins/store', [AdminController::class, 'storeAdmin'])->name('admin.admins.store');
Route::delete('/admin/admins/{id}', [AdminController::class, 'destroyAdmin'])->name('admin.admins.destroy');


Route::post('/admin/reports/{id}/approve', [AdminController::class, 'approve'])->name('admin.reports.approve');
Route::post('/admin/reports/{id}/reject', [AdminController::class, 'reject'])->name('admin.reports.reject');

Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
Route::delete('/admin/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');