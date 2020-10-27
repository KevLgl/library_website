<?php
// Controleur qui gère l'affichage du détail d'un livre
require "model/entity/user.php";
require "model/userManager.php";
require "model/entity/book.php";
require "model/bookManager.php";
require "model/dataBase.php";

//if id is on url
if(isset($_GET["id"])){
$id = htmlspecialchars($_GET["id"]);
}
$bookManager = new bookManager();
$book = $bookManager->getBook($id);





require "view/bookView.php";
