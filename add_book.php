<?php
// Controleur qui gere la gestion d'un livre en BDD
require "model/entity/book.php";
require "model/bookManager.php";
require "model/dataBase.php";

$bookManager = new bookManager();

if(isset($_POST["addbook"]) && !empty($_POST["addbook"])){
    //CREATE OBJET BOOK WITH $_POST
    $book = new Book($_POST);
    $book->setStatus("available");

    //CALL ADDBOOK
    $result = $bookManager->addBook($book);
    if($result){
        header("Location: index.php");
    }
    
}



require "view/add_bookView.php";