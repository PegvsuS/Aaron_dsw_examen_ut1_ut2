<?php

use App\Http\Controllers\messages;
use Illuminate\Support\Facades\Route;
use App\Models\Message;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});


Route::get('/messages/lista', [messages::class, 'listarMensaje'])->name('messages');


Route::get('/messages/{id}/editar', [messages::class, 'mostrarEdicion'])->name('message.editar'); 
Route::put('/messages/{id}', [messages::class, 'actualizarMessage'])->name('message.actualizar');
