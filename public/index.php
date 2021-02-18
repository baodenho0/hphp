<?php

/**
 * ==================
 * hphp framework
 * ==================
 */
require_once "../vendor/hphp/framework/src/app.php";

if(!$GLOBALS['checkedUrlInRoutes']) {
    echo responseJson([
        'status' => 404,
        'msg' => '404 not found'
    ], 404);
}
