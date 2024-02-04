<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('chat.index');
// });

Route::middleware('auth')->group(function () {
    Route::get('/', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/message', [ChatController::class, 'chatMessage'])->name('chat.message');
    Route::post('/chat/message/store', [ChatController::class, 'store_message'])->name('send.message');
});

Route::get('/dashboard', function () {
    $users1 = User::all();
    return view('dashboard',compact('users1'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
