<?php

use Illuminate\Support\Facades\Route;
use App\Models\KnowledgeItem;

Route::get('/', function () {
    return redirect('/chatbot');
});

Route::get('/chatbot', function () {
    return view('chat');
});

Route::get('/pruebas', function () {
    return view('pruebas');
});
