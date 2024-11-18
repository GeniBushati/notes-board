<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NoteController;



Route::get('/', function () {
    return redirect('/api/notes');
});

//These endpoints return the create and edit views on click of the buttons
Route::get('notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::get('api/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
