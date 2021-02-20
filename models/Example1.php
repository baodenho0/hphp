<?php

$model = import("../vendor/hphp/framework/src/model.php");
//$model['setTable']('users');
$table = 'users';

$getAll = function ()
{
    return ['1','3', 'list'];
};

return export('../models/Example1.php', compact(
    'table',
    'model',
    'getAll'
));

