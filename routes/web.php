<?php

use App\Http\Controllers\GoogleLoginController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Volt::route('/', 'guest.beranda')->name('beranda')->middleware('guest');;
Volt::route('/chat-ai', 'chatai.flowise-chat-bot')->name('chat-ai')->middleware('auth');;
Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/logout', [GoogleLoginController::class,          'handleGoogleLogout'])->name('google.logout');
