<?php

namespace Controller;

class AppController extends \Core\Controller
{
    function indexAction(){
        
        $this->render("index");
    }
    function movieAction()
    {
        $this->render("movieList");
        $movie = new \Model\AppModel;
        $movie->showMovie();
    }

}
?>