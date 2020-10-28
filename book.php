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
//create variable manager
$bookManager = new bookManager();
$userManager = new userManager();

//creat Book selected
$book = $bookManager->getBook($id);


$owner_id = $book->getOwner_id();


$userByBook = $userManager->getUserByBook($owner_id);












require "view/bookView.php";
