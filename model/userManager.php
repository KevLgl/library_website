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
  public function getUserById($id) {
    $query = dataBase::getPDOConnexion()->prepare(
      "SELECT id, firstname, lastname, age, city, phone, email
       FROM User
       WHERE id = :id
      --  AND user_id = :user_id"
     );
    $query->execute([
      "id" => $id,
      // "user_id" => $user["id"]
    ]);
    return $query->fetchAll(PDO::FETCH_CLASS, "User")[0];
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
