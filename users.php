<?php
// Controleur qui gère l'affichage de tous les utilisateurs

require "model/entity/user.php";
require "model/userManager.php";
require "model/dataBase.php";

$userManager = new userManager();
$users = $userManager->getUsers();



// code ici 


require "view/usersView.php";
