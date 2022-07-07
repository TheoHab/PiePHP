<?php

namespace Core;

class Core
{
    public function __construct()
    {
        require "src/routes.php";
    }
    public function run()
    {
        $tmp = new Router();
        $res = $tmp->get($_SERVER['REQUEST_URI']);
        $controller = "Controller\\".ucfirst($res['controller'])."Controller";
        $action = $res['action']."Action";
        $class = new $controller;
        $class->$action();
    }
}
?>
