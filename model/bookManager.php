<?php

class bookManager {

  // Récupère tous les livres
  public function getBooks():array {
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
  public function addBook(Book $book):bool {
      $query = dataBase::getPDOConnexion()->prepare(
        "INSERT INTO Book(title, author, release_date, status, categories, summary)
        VALUES(:title, :author, :release_date, :status, :categories, :summary)"
      );

      $result = $query->execute([
        "title" => $book->getTitle(),
        "author" => $book->getAuthor(),
        "release_date" => $book->getRelease_date(),
        "status" => $book->getStatus(),
        "categories" => $book->getCategories(),
        "summary" => $book->getSummary()
      ]);

      return $result;
    }
  

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }
  // Supprime un livre 
  public function removeBook() {

  }

}
