<?php
$customerService = require_once "../Services/Customers/CustomerService.php";


$__construct = function () {

};

$index = function($id, $id1) use ($customerService)
{
    $arrParams = [
        $id, $id1
    ];

    $results = $customerService['index']($arrParams);

    return responseJson($results, 200);
};



$create = function ()
{
    echo 'create in home controller';
};

