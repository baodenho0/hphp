<?php

$customer = require_once "../models/Example.php";


$index = function () use ($customer) {

    return [
        'error' => 0,
        'status' => 200,
        'msg' => 'success',
        'data' => [
            'customers' => $customer['getAll'](),
        ]
    ];
};

$edit = function ($id) use ($customer) {
//    $model = $customer;
//    $q = $model['customer']['where']('id', '=', $id)['get']();
//    dd($q);

    return [
        'error' => 0,
        'status' => 200,
        'msg' => 'success',
        'data' => [
            'customers' => $customer['findById']($id),
        ]
    ];
};

$store = function () use ($customer) {
    $arrParams = [
        'name' => 'test123',
        'email' => 'test123',
        'address' => 'test123',
    ];

    return [
        'error' => 0,
        'status' => 201,
        'msg' => 'success',
        'data' => [
            'created' => $customer['insert']($arrParams),
        ]
    ];
};

$update = function () use ($customer) {
    $arrParams = [
        'name' => 'test123',
        'email' => 'test123',
        'address' => 'test123',
    ];

    return [
        'error' => 0,
        'status' => 200,
        'msg' => 'success',
        'data' => [
            'updated' => $customer['updateById']($arrParams, 1)
        ]
    ];
};


return compact(
    'index',
    'store',
    'edit',
    'update'
);
