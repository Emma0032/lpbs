<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BypassController;

// use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(SlideController::class)->group(function () {
    // Slide Section
    Route::get('/', [SlideController::class, 'index'])->name('welcome');
    Route::get('create', [SlideController::class, 'create'])->name('create');
    Route::post('post', [SlideController::class, 'store'])->name('store');

    // Review Section
    Route::get('review', [SlideController::class, 'review'])->name('review')->middleware('auth');
    Route::post('review', [SlideController::class, 'storeReview'])->name('review.store')->middleware('auth');
    Route::delete('review/{id}/delete', [SlideController::class, 'destroyReview'])->name('review.delete')->middleware('auth');
});

//By-pass Controller
Route::controller(BypassController::class)->group(function () {
    // LGA Controller
    Route::get('lga', [BypassController::class, 'create']);
    Route::post('lga', [BypassController::class, 'store'])->name('lga.store');
});

// Blog Controller
Route::controller(BlogController::class)->group(function () {
    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::patch('blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.delete');
});

Auth::routes();

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/approve', [HomeController::class, 'approve'])->name('review.approval');
    Route::post('/approve/{id}', [HomeController::class, 'approved'])->name('review.approve');
});

// Chat Controller
Route::controller(ChatController::class)->group(function () {
    // General Group Chat Route
    Route::get('group-chat', [ChatController::class, 'generalIndex'])->name('general.chat');
    // Route::get('chats', [ChatController::class, 'fetchMessages'])->name('fetch.chat');
    Route::post('chats', [ChatController::class, 'sendChat'])->name('send.chat');

    // Admin Group Chat Route
    // Route::get()->name();
});
