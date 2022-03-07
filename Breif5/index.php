<?php

require_once "autoload.php";

$path = $_SERVER["REQUEST_URI"];
$params = explode("/", ltrim($path, "/"));
// var_dump($params);

if ($path === "/") {
    include "views/home.php";
} else if (!empty($params[0])) {


    $route = $path;
    $viewPath = "views/$route.php";

    $controller = ucfirst($params[0]) . "Controller";
    $controllerPath = "controllers/$controller.php";
    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        $obj = new $controller();
        if (!empty($params[1])) {
            $action = $params[1];
            if (method_exists($obj, $action)) {
                if (!empty($params[2])) {
                    $obj->$action($params);
                } else {
                    $obj->$action();
                }
            } else {
                include './views/includes/404.php';
            }
        }
    } else if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        include './views/includes/404.php';
    }
}
