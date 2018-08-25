<?php

$this->get('index', function () {
    return view('index');
});

Route::get('/', function () {
    return view('welcome');
});
