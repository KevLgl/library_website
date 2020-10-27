<?php

class userManager {

  // Récupère tous les utilisateurs
  public function getUsers() {
    $query = dataBase::getPDOConnexion()->query(
      "SELECT *
       FROM User
       ");
      return $query->fetchAll(PDO::FETCH_CLASS, "User"); 
  }

  // Récupère un utilisateur par son id
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
