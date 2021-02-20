<?php

group(['namespace' => 'controllers', 'middleware' => ['api', 'auth']] , function () {

    get('/', 'ExampleController@index');
    get('/edit/{id}', 'ExampleController@edit');
    get('/create', 'ExampleController@create', ['middleware' => ['can:create']]);
    post('/store', 'ExampleController@store');
    put('/update', 'ExampleController@update');

});



