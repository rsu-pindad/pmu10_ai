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

Route::group(['middleware' => 'auth'], function () {
    Volt::route('/chat-ai', 'chatai.flowise-card')->name('chat-ai')->middleware('auth');
    Volt::route('/chat-ai/rpb', 'chatai.flowise-rpb-bot')->name('chat-rpb-bot')->middleware('auth');
    Volt::route('/chat-ai/policy', 'chatai.flowise-policy-bot')->name('chat-policy-bot')->middleware('auth');
    Volt::route('/chat-ai/doc', 'chatai.flowise-doc-bot')->name('chat-doc-bot')->middleware('auth');
    Route::get('/logout', [GoogleLoginController::class, 'handleGoogleLogout'])->name('google.logout');
});
Route::group(['middleware' => 'guest'], function () {
    Volt::route('/', 'guest.beranda')->name('beranda');
    Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
    Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
});
