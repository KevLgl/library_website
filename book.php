<?php
// Controleur qui gère l'affichage du détail d'un livre

//if id is on url
if(isset($_GET["id"])){
$id = htmlspecialchars($_GET["id"]);
}


require "model/entity/user.php";
require "model/userManager.php";
require "model/entity/book.php";
require "model/bookManager.php";


// code ici 



require "view/bookView.php";
