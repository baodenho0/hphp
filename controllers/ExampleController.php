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
    echo 'create in example controller';
};

$insert = function () use ($customerService)
{
    $results = $customerService['insert']();

    return responseJson($results, 200);
};

$update = function () use ($customerService)
{
    $results = $customerService['update']();

    return responseJson($results, 200);
};

