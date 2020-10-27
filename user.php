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
    $user = $userManager->getUserById($id);





require "view/userView.php";
