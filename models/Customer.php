<?php

$table = 'customers';
$customer = require_once "../core/model.php";

$getAll = function () use ($customer)
{

    return [
        'function' => 'getAll',
        'model' => 'customer',
        'data' => $customer['get'](),
    ];
};

$findById = function ($id) use ($customer)
{
    return $customer['where']('id', '=', $id)
//        ['where']('name', '=', 'test123')
        ['delete']();

};

$insert = $customer['insert'];

$updateById = function ($params, $id) use ($customer)
{
    return $customer['where']('id', '=', $id)['update']($params);
};

return compact(
    'getAll',
    'findById',
    'insert',
    'updateById',
    'customer'
);

