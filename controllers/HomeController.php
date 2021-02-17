<?php
$customerService = require_once "../services/Customers/CustomerService.php";


$__construct = function () {

};

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
    echo 'create in home controller';
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

