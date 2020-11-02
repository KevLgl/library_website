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
  public function getBook($id) {
    $query = dataBase::getPDOConnexion()->prepare(
      "SELECT id, title, author, release_date, status, categories, summary, owner_id
       FROM Book
       WHERE id = :id"
     );
    $query->execute([
      "id" => $id
    ]);
    return $query->fetchAll(PDO::FETCH_CLASS, "Book")[0];
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
  //get book with user
    public function getBooksByUser($id){
      $query = dataBase::getPDOConnexion()->prepare(
      'SELECT id, title, author, owner_id
      FROM Book
      WHERE owner_id = :user_id
      ');
  
      $query->execute([
      "user_id" => $id
      ]);
      
      if($query === false){
        var_dump($pdo->errorInfo());
        die('erreur SQL');
      }
      
      return $query->fetchAll(PDO::FETCH_CLASS, "Book");
      
  }
  // Met à jour le statut d'un livre emprunté à NULL 
  public function updateBookStatusNULL(Book $book):bool {
      $query = dataBase::getPDOConnexion()->prepare( 
        "UPDATE Book
        SET owner_id = NULL
        WHERE id = :id"
      );
      $result = $query->execute([
        "id" => $book->getId()
      ]); 
      return $result;
  }
  // add user for one book
  public function updateBookStatusUser(User $user, Book $book):bool {
    $query = dataBase::getPDOConnexion()->prepare( 
      "UPDATE Book
      SET owner_id = :user_id
      WHERE id = :id"
    );
    $result = $query->execute([
      "user_id" => $user->getId(),
      "id" => $book->getId()
    ]); 
    return $result;
}
  // Remove book
  public function removeBook(Book $book) {
    $query = dataBase::getPDOConnexion()->prepare(
      "DELETE 
       FROM Book
       WHERE id = :id"
     );
    $query->execute([
      "id" => $book->getId()
    ]);
  }
    // get moove with statut available
    public function getBooksAvailable():array {
      $query = dataBase::getPDOConnexion()->query(
        "SELECT *
         FROM Book
         WHERE owner_id IS NULL
         ");
        return $query->fetchAll(PDO::FETCH_CLASS, "Book"); 
    }


}