<?php

    include('config/actions.php');
    include('config/bdd.php');
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyForum</title>
    <link rel="stylesheet" href="asset/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

    <div>
        <div>
            <div>
                <?php
                // Quelle est l'action à faire ?
                if (isset($_GET["action"])) {
                    $action = $_GET["action"];
                } else {
                    $action = "home";
                }

                // Est ce que cette action existe dans la liste des actions
                if (array_key_exists($action, $listeDesActions) == false) {
                    include("vues/404.php"); // NON : page 404
                } else {
                    include($listeDesActions[$action]); // Oui, on la charge
                }

                ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
                ?>


            </div>
        </div>
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>