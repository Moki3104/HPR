<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;


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


Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    
    Route::get('/posts/create', [PostController::class, 'create']);
    
    Route::post('/posts', [PostController::class, 'store']);
    
    Route::get('/categories/{category}', [CategoryController::class,'index']);
    
    Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
    
    Route::put('/posts/{post}', [PostController::class, 'update']);
    
    Route::get('/posts/{post}/comment', [PostController::class, 'comment']);
    
    Route::post('/posts/{post}', [PostController::class, 'comment_store']);
    
    Route::get('/posts/{post}', [PostController::class ,'show']);
    
    Route::delete('/posts/{post}', [PostController::class,'delete']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PostController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';