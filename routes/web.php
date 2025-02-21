<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TelegramBotController;
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

Route::get('/', [MainController::class,'index'])->name('main_page');

Route::get('/updated-activity', [TelegramBotController::class, 'updatedActivity'])->name('updatedActivity');
Route::post('/send-message', [TelegramBotController::class, 'storeMessage'])->name('storeMessage');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE';
});
