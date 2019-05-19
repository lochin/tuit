<?php

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::get('/services', 'PageController@services');

Route::get('/contact', 'PageController@contact');