<?php
/**
 * loi xu ly o 2 models
 * y tuong: lay model o bien export
 */
$model = import("../vendor/hphp/framework/src/model.php");
$table = 'customers';

$getAll = function () use ($model)
{

    return [
        'function' => 'getAll',
        'model' => 'customers',
        'data' => $model['get'](),
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
    'table',
    'getAll',
    'findById',
    'insert',
    'model',
    'updateById'
));


