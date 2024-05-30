<?php

use App\Http\Controllers\ProfileController;
use App\Models\Calender;
use Illuminate\Support\Facades\Route;
use App\Models\Note;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('calenders/index', [CalenderController::class, 'index'])->name('calenders.index');
    Route::get('/calenders/create', [CalenderController::class, 'create'])->name('calenders.create');
    Route::post('/calenders', [CalenderController::class, 'store'])->name('calenders.store');
    Route::delete('calenders/{id}', [CalenderController::class, 'destroy'])->name('calenders.destroy');
    Route::patch('/calenders/{id}/activate', [CalenderController::class, 'activate'])->name('calenders.activate');

    Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
    Route::get('notes/index', [NoteController::class, 'index'])->name('notes.index');
    Route::get('notes/{id}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    Route::put('notes/{id}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('notes/{id}', [NoteController::class, 'destroy'])->name('notes.destroy');
    Route::get('note/{note:id}', function (Note $note) {
        return view('notes.note', ['note' => $note]);
    });
});

require __DIR__ . '/auth.php';
