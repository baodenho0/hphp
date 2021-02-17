<?php

$customer = require_once "../models/Customer.php";

$login = function () use ($customer)
{
    $request = request();

    $login = $customer['customer']
        ['where']('name', '=', $request['name'])
        ['where']('email', '=', $request['email'])
        ['get']();

    dd($login);
};