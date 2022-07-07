<?php
spl_autoload_register(function ($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    if(file_exists($class.".php")){
        include $class.".php";
    }
    elseif(file_exists("Core/".$class.".php")){
        include "Core/".$class.".php";
    }
    elseif(file_exists("src/".$class.".php")){
        include "src/".$class.".php";
    }
    elseif(file_exists("src/Controller/".$class.".php")){
        include "src/Controller/".$class.".php";
    }
    elseif(file_exists("src/Model/".$class.".php")){
        include "src/Model/".$class.".php";
    }
    else{
        echo "ERROR Class not found";
    }
});
?>