<?php
// Controlleur qui gérer l'affichage de tous les livres
require "model/entity/book.php";
require "model/bookManager.php";
require "model/dataBase.php";


$query = dataBase::getPDOConnexion()->query(
    "SELECT *
     FROM Book
     ");
    $books =  $query->fetchAll(PDO::FETCH_CLASS, "Book"); 

    var_dump($books);




// code ici 


require "view/indexView.php";








