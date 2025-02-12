<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::get('/get-song-queue', [MainController::class, 'getSongQueue'])->name('song.queue');
Route::post('/update-song-queue', [MainController::class, 'updateSongQueue'])->name('song.queue.update');
