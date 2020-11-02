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
       WHERE id = :id"
     );
    $query->execute([
      "id" => $id
    ]);
    return $query->fetchAll(PDO::FETCH_CLASS, "User")[0];
  }


  public function getUserByBook($owner_id){
    $query = dataBase::getPDOConnexion()->prepare(
    'SELECT id, lastname, firstname, age, city, phone, email
    FROM User 
    WHERE id = :owner_id
    ');

    $query->execute([
    "owner_id" => $owner_id
    ]);
    
    if($query === false){
      var_dump($pdo->errorInfo());
      die('erreur SQL');
    }
    if($owner_id){
    return $query->fetchAll(PDO::FETCH_CLASS, "User")[0];
    }
}


  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }

}
