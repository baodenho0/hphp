<?php

group(['namespace' => 'controllers'] , function () {

    get('/', 'ExampleController@index');
    get('/edit/{id}', 'ExampleController@edit');
    get('/create', 'ExampleController@create');
    get('/insert', 'ExampleController@insert');
    get('/update', 'ExampleController@update');

});



