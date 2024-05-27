<?php

use App\Http\Controllers\ProfileController;
use App\Models\Calender;
use Illuminate\Support\Facades\Route;
use App\Models\Note;


Route::get('/', function () {
    return view('auth/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/notes', function(){
    return view('notes', ['judul' => 'Blog', 'notes' => Note::all()]);
});

Route::get('/calenders', function(){
    return view('calenders', ['status' => false, 'calenders' => Calender::all()]);
});

Route::get('note/{note:id}', function(Note $note){
    return view('note', ['judul' => 'Single Post', 'note' => $note]);
});

Route::get('/welcome', function () {
    return view('welcome', ['name' => '$name']);
});