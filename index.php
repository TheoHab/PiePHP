<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="webroot/css/style.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <input type="checkbox" id="toggle" name="toggle">
            <?php  if (!empty($_SESSION['id'])) { ?>
                <ul class="navigation-menu">
                    <li id="acceuil"><a href="index">Acceuil</a></li>
                    <li id="movie"><a href="movieList">Films</a></li>
                    <li id="seance"><a href="movieNow">Séances</a></li>
                    <li id="setting"><a href="update">Mon compte</a></li>
                    <li id="deconexion"><a href='acceuil?deco=ok'>DECONNEXION</a></li>
                <?php }

              ?>

                </ul>


                <div class="navbar">
                    <label for="toggle"><i class="fa fa-bars"><img id="logoP" src="webroot/assets/popcorn-box.png" alt="popcornLogo" /></i> </label>
                    <?php if(empty($_SESSION['id'])) { ?>
                        <p style='float: right; margin-right: 5%;'><a href="register">| S'inscrire</a></p>
                        <p style='float: right; margin-right: .5%;'><a href="login">Se connecter</a></p>
                        <em><p style='float: right;'><?php }else{
                            echo $_SESSION['email'];
                        }; ?></p></em>


                </div>
        </nav>
    </header>

</body>
<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
if(($_GET['deco'] == "ok")){
    session_destroy();
    header('location:http://localhost/PiePHP/');
    unset($_GET['deco']);

}
define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$app->run();

?>

</html>