<?php

class bookManager {

  // Récupère tous les livres
  public function getBooks() {
    $query = dataBase::getPDOConnexion()->query(
      "SELECT *
       FROM Book
       ");
      return $query->fetchAll(PDO::FETCH_CLASS, "Book"); 
  }

  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }
  // Supprime un livre 
  public function removeBook() {

  }

}
