<?php

require_once('src/connection.php');
session_start();

if (!isset($_SESSION['user']) && $_SERVER['REQUEST_URI'] !== '/test-mvc/user/login' && $_SERVER['REQUEST_URI'] !== '/test-mvc/user/register') {
    header("Location: /test-mvc/user/login");
}
require_once('views/navbar.php');

if (isset($_GET['action']) && !empty($_GET['action'])) {
    $params = explode('/', $_GET['action']);

    if ($params[0] != '') {
        $controller = $params[0];
        $action = isset($params[1]) ? $params[1] : 'home';
        $controllerFile = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']) . 'src/Controller/' . $controller . 'Controller.php';

        if (file_exists($controllerFile)) {
            require_once($controllerFile);

            if (function_exists($action)) {
                if (isset($params[2])) {
                    $action($params[2]);
                } else {
                    $action();
                }
            } else {
                require_once('views/404.html');
            }
        } else {
            require_once('views/404.html');
        }
    }
} else {
    require_once('src/Controller/UserController.php');
    login();
}
