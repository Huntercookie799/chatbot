<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/chatbot');
});

Route::get('/chatbot', function () {
    return view('chat');
});
