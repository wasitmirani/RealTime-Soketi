<?php

use Illuminate\Support\Facades\Route;
use App\Events\NewEvent;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/event', function () {
    NewEvent::dispatch(request()->msg);

    return 'Message sent!';
});
