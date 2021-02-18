<?php

group(['namespace' => 'controllers'] , function () {

    get('/', 'ExampleController@index');
    get('/edit/{id}', 'ExampleController@edit');
    get('/create', 'ExampleController@create');
    post('/store', 'ExampleController@store');
    put('/update', 'ExampleController@update');

});



