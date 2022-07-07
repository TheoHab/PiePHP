<?php

Core\Router::connect('/', ['controller' => "app", "action"=>"index"]);
Core\Router::connect('/register', ['controller' => "user", "action" => "register"]);
Core\Router::connect('/login', ['controller' => "user", "action" => "login"]);
Core\Router::connect('/update', ['controller' => "user", "action" => "update"]);
Core\Router::connect('/acceuil', ['controller' => "user", "action" => "acceuil"]);
//Core\Router::connect('/movieList', ['controller' => "app", "action" => "movie"]);
Core\Router::connect('/movieList', ['controller' => "user", "action" => "addMovie"]);


?>