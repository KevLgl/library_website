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
    //create variable manager
    $userManager = new userManager();
    $bookManager = new bookManager();

    //create user selected
    $user = $userManager->getUserById($id);

    // get book(s) if user got
    $booksByUser = $bookManager->getBooksByUser($id);

    //get book(s) available
    $availableBooks = $bookManager->getBooksAvailable();

   
    //UPDATE BOOK TO OWNER_ID = NULL
    if(isset($_POST['updatenull']) && !empty($_POST['updatenull'])){
        //get id of cliqued book
       $idBookCliqued= $_POST["bookCliqued"];
       // we get the book with the id
       $bookCliqued = $bookManager->getBook($idBookCliqued);
   
       $bookManager->updateBookStatusNULL($bookCliqued);
        header("Location: user.php?id={$id}");
    }
    //UPDATE BOOK TO OWNER_ID = $is in $_POST
    if(isset($_POST['lendbook']) && !empty($_POST['lendbook'])){
        //get id of cliqued book
        $typedID = $_POST['BookID'];
        // get the book with the typed ID
        $lendBook = $bookManager->getBook($typedID);
        $bookManager->updateBookStatusUser($user, $lendBook);
        header("Location: user.php?id={$id}");
   }



require "view/userView.php";
