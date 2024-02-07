<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::controller(HomeController::class)->group(function(){
    Route::get("/","index")->name("home");
    Route::get("/course/{id}","viewCourse")->name("viewCourse");
});

Route::prefix("admin")->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::get('/',"index")->name("admin.index");
        Route::get('/student',"manageStudent")->name("admin.manage.student");
        Route::get('/course',"manageCourse")->name("admin.manage.course");
        Route::get('/course/insert',"insertCourse")->name("admin.insert.course");
        Route::get('/category',"manageCategory")->name("admin.manage.category");
    });
});
Route::prefix("student")->group(function(){
    Route::controller(StudentController::class)->group(function(){

    });
});
Route::prefix("manager")->group(function(){
    Route::controller(ManagerController::class)->group(function(){
    });
});
