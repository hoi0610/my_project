<?php

use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
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

Route::get('test', function () {
    return view('admin.category.list');
});
Route::prefix('admin')->group(function (){
    Route::prefix('category')->group(function (){
        Route::get('', [CategoryController::class, 'list'])->name('admin.category.index');
        Route::get('getAdd', [CategoryController::class, 'getAdd'])->name('admin.category.getAdd');
        Route::post('postAdd', [CategoryController::class, 'postAdd'])->name('admin.category.postAdd');
        Route::get('getUpdate/{id}', [CategoryController::class, 'getUpdate'])->name('admin.category.getUpdate');
        Route::post('postUpdate/{id}', [CategoryController::class, 'postUpdate'])->name('admin.category.postUpdate');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });
    Route::prefix('project')->group(function (){
        Route::get('', [ProjectController::class, 'list'])->name('admin.project.index');
        Route::get('getAdd', [ProjectController::class, 'getAdd'])->name('admin.project.getAdd');
        Route::post('postAdd', [ProjectController::class, 'postAdd'])->name('admin.project.postAdd');
        Route::get('getUpdate/{id}', [ProjectController::class, 'getUpdate'])->name('admin.project.getUpdate');
        Route::post('postUpdate/{id}', [ProjectController::class, 'postUpdate'])->name('admin.project.postUpdate');
        Route::get('delete/{id}', [ProjectController::class, 'delete'])->name('admin.project.delete');
    });
    Route::prefix('report')->group(function (){
        Route::get('', [ReportController::class, 'list'])->name('admin.report.index');
        Route::get('getAdd', [ReportController::class, 'getAdd'])->name('admin.report.getAdd');
        Route::post('postAdd', [ReportController::class, 'postAdd'])->name('admin.report.postAdd');
        Route::get('getUpdate/{id}', [ReportController::class, 'getUpdate'])->name('admin.report.getUpdate');
        Route::post('postUpdate/{id}', [ReportController::class, 'postUpdate'])->name('admin.report.postUpdate');
        Route::get('delete/{id}', [ReportController::class, 'delete'])->name('admin.report.delete');
    });
    Route::prefix('task')->group(function (){
        Route::get('', [TaskController::class, 'list'])->name('admin.task.index');
        Route::get('getAdd', [TaskController::class, 'getAdd'])->name('admin.task.getAdd');
        Route::post('postAdd', [TaskController::class, 'postAdd'])->name('admin.task.postAdd');
        Route::get('getUpdate/{id}', [TaskController::class, 'getUpdate'])->name('admin.task.getUpdate');
        Route::post('postUpdate/{id}', [TaskController::class, 'postUpdate'])->name('admin.task.postUpdate');
        Route::get('delete/{id}', [TaskController::class, 'delete'])->name('admin.task.delete');
    });
    Route::prefix('user')->group(function (){
        Route::get('', [UserController::class, 'list'])->name('admin.user.index');
        Route::get('getAdd', [UserController::class, 'getAdd'])->name('admin.user.getAdd');
        Route::post('postAdd', [UserController::class, 'postAdd'])->name('admin.user.postAdd');
        Route::get('getUpdate/{id}', [UserController::class, 'getUpdate'])->name('admin.user.getUpdate');
        Route::post('postUpdate/{id}', [UserController::class, 'postUpdate'])->name('admin.user.postUpdate');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    });
});
