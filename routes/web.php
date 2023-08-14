<?php

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
})->name('welcome');

Route::get('/chat/{id}', [App\Http\Controllers\ChatController::class, 'show'])->name('chat.show');

Route::get('/settings', [App\Http\Controllers\SettingsController::class, 'show'])->name('settings');
