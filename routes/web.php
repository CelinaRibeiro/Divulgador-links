<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function(){

    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'loginAction']);

    Route::get('/register', [AdminController::class, 'register']);
    Route::post('/register', [AdminController::class, 'registerAction']);

    Route::get('/logout', [AdminController::class, 'logout']);

    Route::get('/', [AdminController::class, 'index']);

    Route::get('/{slug}/links', [AdminController::class, 'pageLinks']);
    Route::get('/{slug}/design', [AdminController::class, 'pageDesign']);
    Route::get('/{slug}/stats', [AdminController::class, 'pageStats']);

    Route::get('/linkorder/{linkid}/{pos}', [AdminController::class, 'linkOrderUpdate']);

    Route::get('/{slug}/newLink', [AdminController::class, 'newLink']);
    Route::post('/{slug}/newLink', [AdminController::class, 'newLinkAction']);

    Route::get('/{slug}/editLink/{linkid}', [AdminController::class, 'editLink']);
    Route::post('/{slug}/editLink/{linkid}', [AdminController::class, 'editLinkAction']);
    Route::get('/{slug}/delLink/{linkid}', [AdminController::class, 'delLink']);

});

Route::get('/{slug}', [PageController::class, 'index']);

