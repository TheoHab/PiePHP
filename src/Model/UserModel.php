<?php

namespace Model;

class UserModel
{

    function save($email, $pass)
    {
        if ($email != NULL && $pass != NULL) {
            $password = password_hash($pass, PASSWORD_DEFAULT);
            $db = new \Core\Database;
            $sendData = $db->connection();
            $result = $sendData->query("SELECT count(id) as 'nbr_result' FROM users WHERE email = '$email';")->fetch();
            if ($result['nbr_result'] == 1) {
                echo "Vous avez déjà un compte existant sur le site";
            } else {
                $insert = $sendData->query("INSERT INTO users (email, password) VALUES ('$email', '$password');");
                if ($insert == true) {
                    echo "Votre inscription a bien été enregistrée";
                    return $sendData->lastInsertId();
                    header('location:http://localhost/PiePHP/login');
                } else {
                    echo "Erreur: Veuillez réessayer";
                }
            }
        } 
    }

    function log($email, $pass)
    {
        $db = new \Core\Database;
        $sendData = $db->connection();
        $result = $sendData->query("SELECT * FROM users WHERE email = '$email';")->fetch();
        if(password_verify($pass, $result['password']) == true) {
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['email'] = $result['email'];
            header('location:http://localhost/PiePHP/acceuil');
        }
    }

    function update($email, $pass)
    {
        $id = $_SESSION['id'];
        $db = new \Core\Database;
        $sendData = $db->connection();
        if($email != NULL){
            $sendData->query("UPDATE users SET email = '$email' WHERE id = $id;");
            header('location:http://localhost/PiePHP/');
        }
        if($pass != NULL){
            $password = password_hash($pass, PASSWORD_DEFAULT);
            $sendData->query("UPDATE users SET password = '$password' WHERE id = $id;");
            header('location:http://localhost/PiePHP/');
        }
    }
    function delete($id)
    {
        
    }
    function addMovie($title, $date, $real, $description)
    {
        if(isset($tile) && isset($real) && isset($date) && isset($description)){
            $db = new \Core\Database;
            $sendData = $db->connection();
            $result = $sendData->query("INSERT INTO movies (title, date, realisateur, description) VALUES ('$title', $date, '$real', '$description')");
            if($result == true){
                echo "votre film a correctement été ajouté";
            }
        }
    }
}
?>
