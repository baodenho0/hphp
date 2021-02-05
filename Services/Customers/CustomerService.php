<?php
$customerService1 = 'customerService';
$index = function ($arrParams) {
    return [
        'error' => 0,
        'status' => 200,
        'msg' => 'success',
        'data' => [
            'total' => $arrParams[0] + $arrParams[1],
        ]
    ];
};

$insert = function ($arrParams) {
    return 'insert service';
};

$update = function ($arrParams) {
    return 'update service';
};


return compact(
    'index',
    'insert',
    'update'
);
