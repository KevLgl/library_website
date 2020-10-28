<?php
// Controleur qui gère l'affichage du détail d'un utilisateur


require "model/entity/user.php";
require "model/userManager.php";
require "model/entity/book.php";
require "model/bookManager.php";
require "model/dataBase.php";


if(isset($_GET["id"])){
    $id = htmlspecialchars($_GET["id"]);
    }
    $userManager = new userManager();
    $bookManager = new bookManager();
    $user = $userManager->getUserById($id);

    $booksByUser = $bookManager->getBooksByUser($id);

    foreach($booksByUser as $bookByUser){
        var_dump($bookByUser);
    }

require "view/userView.php";
