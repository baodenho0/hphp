<?php

$model = import("../vendor/hphp/framework/src/model.php");
$model = $model['table']('orders');

$getAll = function () use ($model)
{

    return [
        'function' => 'getAll',
        'model' => 'users',
        'data' => $model['get'](),
    ];
};

return export('../models/Example1.php', compact(
    'getAll'
));

