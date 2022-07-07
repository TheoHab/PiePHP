<?php 

namespace Core;

Class Controller
{

    function __destruct()
    {
        
        
    }
    
    protected function render($view, $scope = [])
    {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', basename(get_class($this))), $view]).'.php';
        $file = str_replace("\\", "", $f);
        if(file_exists($file)){
            ob_start();
            include($file);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']).'.php');
        }
    }
}
?>