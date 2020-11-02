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

// get owner of the book
$userByBook = $userManager->getUserByBook($owner_id);
//UPDATE BOOK TO OWNER_ID = NULL
if(isset($_POST['updatenull']) && !empty($_POST['updatenull'])){
    $bookManager->updateBookStatusNULL($book);
    header("Location: index.php");
}
// UPDATE BOOK TO OWNER ID = ID IN $_POST
if(isset($_POST['lendbook']) && !empty($_POST['lendbook'])){
     $lendUser = $userManager->getUserById($_POST['UserID']);
     $bookManager->updateBookStatusUser($lendUser, $book);
     header("Location: index.php");
}
// REMOVE DEFINITELY 
if(isset($_POST['removebook']) && !empty($_POST['removebook'])){
    $removedBook = $bookManager->getBook($id);
    $bookManager->removeBook($removedBook);
    header("Location: index.php");
}















require "view/bookView.php";
