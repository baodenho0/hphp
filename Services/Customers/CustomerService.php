<?php

$customer = require_once "../models/Customer.php";


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

$insert = function () use ($customer) {
    $arrParams = [
        'name' => 'test123',
        'email' => 'test123',
        'address' => 'test123',
    ];

    return $customer['insert']($arrParams);
};

$update = function () use ($customer) {
    $arrParams = [
        'name' => 'test123',
        'email' => 'test123',
        'address' => 'test123',
    ];

    return $customer['updateById']($arrParams, 1);
};


return compact(
    'index',
    'insert',
    'edit',
    'update'
);
