<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

abstract class dataBase {
    const HOST = "localhost";
    const DBNAME = "library_php";
    const USER = "LibraryPHP";
    const PASSWORD = "library76";
  
    public static function getPDOConnexion() {
      try {
        $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
        return $db;
      } catch (\Exception $e) {
        echo "Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br/>";
        die();
      }
    }
  
  }