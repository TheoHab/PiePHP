<?php
namespace Core;
class Database
{
    
     function connection()
     {
        try {
            $data = new \PDO("mysql:host=localhost;dbname=PiePHP;", "theo", "01091996");
            return $data;
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
    }
}

?>