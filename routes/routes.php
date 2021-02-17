<?php

group(['namespace' => 'controllers'] , function () {
    get('index', 'HomeController@index');
    get('index/{id}', 'HomeController@edit');
    get('create', 'HomeController@create');
    get('insert', 'HomeController@insert');
    get('update', 'HomeController@update');

    get('login', 'LoginController@login');
//    coreRoutesGet('product/index', 'ProductController@index');

    group(['namespace' => 'controllers'] , function () {
    //    coreRoutesGet('product/index', 'ProductController@index');
    });

    group(['namespace' => 'Customers', 'prefix' => 'customers', 'middleware' => 'customers'] , function () {
        group(['namespace' => 'abc'] , function () {
            get('qqweqwedd', 'CustomerController@abcIndex');
        });

        get('customer/index', 'CustomerController@index');
        get('customer/index-abc', 'CustomerController@index');

        group(['namespace' => 'abc', 'prefix' => 'abc1', 'middleware' => ['middleware1','sdf']] , function () {
            get('{index}', 'CustomerController@abcIndex');
        });
    });

    group([] , function () {
        group([] , function () {
            get('product/index', 'ProductController@index');
        });
    });

});

