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

    return json_encode($results);
};



$create = function ()
{
    echo 'create in home controller';
};

