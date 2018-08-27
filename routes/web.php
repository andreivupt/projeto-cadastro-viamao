<?php

$this->get('index', function () {
    return view('index');
});

$this->get('cadastrar', 'SistemaController@create')->name('create.student');

Route::post('salvar', 'SistemaController@store')->name('store.student');


Route::get('/', function () {
    return view('welcome');
});
