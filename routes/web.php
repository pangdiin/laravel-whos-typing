<?php

Auth::routes();

Route::get('/', function () {
    return view('chat');
})->middleware('auth');

Route::post('send', function () {
    broadcast(new \App\Events\MessageSent($user, $message))->toOthers();
});