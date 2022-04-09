<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\FileTicketController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::get('/' , [homeController::class , 'index'])->name('home.index');
    Route::prefix('file-tickets')->as('file.')->group(function(){
        Route::get('/' , [FileTicketController::class , 'index'])->name('index');
    });
    Route::prefix('community')->as('community.')->group(function(){
        Route::get('/' , [CommunityController::class , 'index'])->name('index');
        Route::get('/single' , [CommunityController::class , 'show'])->name('index');
    });
    Route::prefix('user')->as('user.')->group(function(){
        Route::get('/' , [UserController::class , 'index'])->name('index');
    });

    Route::prefix('role')->as('role.')->group(function(){
        Route::get('/' , [RoleController::class , 'index'])->name('index');
    });
});

