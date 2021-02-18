<?php

$table = 'customers';

$customer = require_once "../vendor/hphp/framework/src/model.php";

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


