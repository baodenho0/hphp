<?php

$model = import('../vendor/hphp/framework/src/model.php');
$model = table('customers');
dd($model);


$getAll = function () use ($model)
{
    return [
        'function' => 'getAll',
        'model' => 'customers',
        'data' => $model['where']('id', '=', 6)['get'](),
    ];
};

$findById = function ($id) use ($model)
{
    return $model['where']('id', '=', $id)
        ['delete']();

};

$insert = $model['insert'];

$updateById = function ($params, $id) use ($model)
{
    return $model['where']('id', '=', $id)['update']($params);
};

return export('../models/Example.php', compact(
    'getAll',
    'findById',
    'insert',
    'model',
    'updateById'
));


