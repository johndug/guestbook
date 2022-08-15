<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\GuestMessageController::class, 'index']);

Route::get('/guestbook', [App\Http\Controllers\GuestMessageController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// new message page
Route::get('/message', [App\Http\Controllers\GuestMessageController::class, 'create'])->name('message');

// mew message save
Route::post('/message', [App\Http\Controllers\GuestMessageController::class, 'store']);

// edit message page
Route::get('/message/{guestMessage}', [App\Http\Controllers\GuestMessageController::class, 'edit'])->name('message');

// update message
Route::post('/message/{guestMessage}', [App\Http\Controllers\GuestMessageController::class, 'update']);

// delete message
Route::get('/message/delete/{guestMessage}', [App\Http\Controllers\GuestMessageController::class, 'delete'])->name('message');

Route::post('/message/delete/{guestMessage}', [App\Http\Controllers\GuestMessageController::class, 'destroy']);


// admin
Route::get('/admin-messages', [App\Http\Controllers\DashboardController::class, 'messages'])->name('admin-message');

// new reply
Route::get('/reply/{guestMessage}', [App\Http\Controllers\MessageReplyController::class, 'create'])->name('reply');

Route::post('/reply/{guestMessage}', [App\Http\Controllers\MessageReplyController::class, 'store'])->name('reply');