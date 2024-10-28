<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;


Route::get('/messages', [Controlador::class, 'showMessages'])->name("messages");

// Editar y guardar messages
Route::get('/messages/{id}/edit', [Controlador::class, 'editMessage'])->name("edit");
Route::put('/messages/{id}', [Controlador::class, 'updateMessage'])->name("update");
