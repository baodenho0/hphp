<?php

function group(array $arrParams, closure $callback)
{
    return coreRoutesGroup($arrParams, $callback);
}

function get(string $url, string $controller)
{
    return coreRoutesGet($url, $controller);
}

//function post($url, $controller)
//{
//    return coreRoutesPost($url, $controller);
//}
//
//function put($url, $controller)
//{
//    return coreRoutesPut($url, $controller);
//}
//
//function patch($url, $controller)
//{
//    return coreRoutesPatch($url, $controller);
//}
//
//function delete($url, $controller)
//{
//    return coreRoutesDelete($url, $controller);
//}

