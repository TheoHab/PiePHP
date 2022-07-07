<?php 

namespace Controller;

class UserController extends \Core\Controller
{
    function registerAction()
    {   
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $this->render('register');
        $tmp = new \Model\UserModel;
        $tmp->save($email, $password);

    }
    function loginAction()
    {
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $this->render('login');
        $tmp = new \Model\UserModel;
        $tmp->log($email, $password);

    }
    function updateAction()
    {
        $password = $_POST['pass'] == "" ? NULL : $_POST['pass'];
        $email = $_POST['email']  == "" ? NULL : $_POST['email'];
        $this->render('update');
        $tmp = new \Model\UserModel;
        $tmp->update($email, $password);
    }
    function acceuilAction()
    {
        $this->render('acceuil');
    }
    function addMovieAction()
    {
        
        $this->render('movieList');
        var_dump($_POST);
        $title = $_POST['title'];
        $date = $_POST['date'] ;
        $real = $_POST['realisateur'];
        $description = $_POST['bio'];
        $addMovie = new \Model\UserModel;
        $addMovie->addMovie($title, $date, $real, $description);
    }
}
?>