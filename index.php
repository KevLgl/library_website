<?php
// Controlleur qui gérer l'affichage de tous les livres
require "model/entity/book.php";
require "model/bookManager.php";
require "model/dataBase.php";

$bookManager = new bookManager();
$books = $bookManager->getBooks();
    




// code ici 


require "view/indexView.php";








