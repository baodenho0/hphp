<?php

$example = import("../models/Example.php");
$example1 = import("../models/Example1.php");


$index = function () use ($example, $example1) {

    return [
        'error' => 0,
        'status' => 200,
        'msg' => 'success',
        'data' => [
            'customers' => $example['getAll'](),
            'users' => $example1['getAll'](),
//            'qUsers' => $example1['model']['get'](),
//            'qCustomers' => $example1['model']['get'](),
        ]
    ];
};

$edit = function ($id) use ($example) {
//    $model = $example;
//    $q = $model['customer']['where']('id', '=', $id)['get']();
//    dd($q);

    return [
        'error' => 0,
        'status' => 200,
        'msg' => 'success',
        'data' => [
            'customers' => $example['findById']($id),
        ]
    ];
};

$store = function () use ($example) {
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
            'created' => $example['insert']($arrParams),
        ]
    ];
};

$update = function () use ($example) {
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
            'updated' => $example['updateById']($arrParams, 1)
        ]
    ];
};


return compact(
    'index',
    'store',
    'edit',
    'update'
);
