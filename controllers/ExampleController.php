<?php
$customerService = require_once "../services/Examples/ExampleService.php";

$index = function() use ($customerService)
{
    $results = $customerService['index']();

    return responseJson($results, 200);
};

$edit = function ($id) use ($customerService)
{
    $results = $customerService['edit']($id);

    return responseJson($results, 200);
};

$create = function ()
{
    $results = [
        'error' => 0,
        'status' => 200,
        'msg' => 'oke',
    ];

    return responseJson($results, 200);
};

$store = function () use ($customerService)
{
    $results = $customerService['store']();

    return responseJson($results, 201);
};

$update = function () use ($customerService)
{
    $results = $customerService['update']();

    return responseJson($results, 200);
};

