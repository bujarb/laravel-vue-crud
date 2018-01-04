<?php

Route::get('/', function () {
 return view('welcome');
});
Route::resource('items', 'ItemController');
