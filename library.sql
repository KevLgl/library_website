DROP DATABASE IF EXISTS library_php;
CREATE DATABASE library_php CHARACTER SET 'utf8';
USE library_php;

DROP USER IF EXISTS 'LibraryPHP'@'Localhost';
CREATE USER 'LibraryPHP'@'Localhost';
GRANT ALL PRIVILEGES ON library_php.* To 'LibraryPHP'@'Localhost' IDENTIFIED BY 'library76';


CREATE TABLE User(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(50) NOT NULL,
  lastname VARCHAR(50) NOT NULL,
  age INT NOT NULL,
  city VARCHAR(30) NOT NULL,
  phone VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User(firstname, lastname, age, city, phone, email)
VALUES
("Romain", "Lebourg", 22,"Rouen" , "0672276521","romain@outlook.com" ),
("Louis", "Dupuis", 22,"Paris" , "0672276521","louis@outlook.com" ),
("Antoine", "Briet", 22,"Monaco" , "0672276521","antoine@outlook.com" ),
("Kevin", "Laguel", 22,"Oissel" , "0672276521","kevin@outlook.com" ),
("Nathalie", "Levasseur", 22,"Sotteville" , "0672276521","nathalie@outlook.com" ),
("Hocine", "Laguel", 22,"New York" , "0672276521","hocine@outlook.com" ),
("Camille", "Larcopage", 22,"Oissel" , "0672276521","camlarco@outlook.com" ),
("Quentin", "Montargi", 19,"Rouen" , "0612652431","quentlgl@outlook.com" )
;


CREATE TABLE Book(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  author VARCHAR(50) NOT NULL,
  release_date DATE NOT NULL,
  status VARCHAR(30) NOT NULL,
  categories VARCHAR(50) NOT NULL,
  summary TEXT NOT NULL UNIQUE,
  owner_id INT UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (owner_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book(title, author, release_date, status, categories, summary, owner_id)
VALUES
("Harry Potter", "JK Rowling", "2000-06-18", "available", "fantastique", "Orphelin, le jeune Harry Potter peut enfin quitter ses tyranniques oncle et tante Dursley lorsqu'un curieux messager lui révèle qu'il est un sorcier. À 11 ans, Harry va enfin pouvoir intégrer la légendaire école de sorcellerie de Poudlard, y trouver une famille digne de ce nom et des amis, développer ses dons, et préparer son glorieux avenir.", 1),
("Le Hobbit", "Jack Brel", "2004-05-15", "available", "drame", "The Hobbit is set within Tolkien's fictional universe and follows the quest of home-loving Bilbo Baggins, the titular hobbit, to win a share of the treasure guarded by Smaug the dragon. Bilbo's journey takes him from light-hearted, rural surroundings into more sinister territory.", 1),
("Game of thrones", "JR Tolkien", "2006-01-15", "available", "thriller", "Game of Thrones is an HBO series that tells the story of a medieval country's civil war. ... When the story begins, a decade-long summer is ending, and winter looms as characters battle to claim the Iron Throne, the seat of the king of the Seven Kingdoms, the regime that rules all but the northern tip of Westeros.", 2),
("Asterix et Obelix", "Jean", "2006-01-15", "available", "animation", "It relates the adventures of a Gaul warrior named Asterix. Asterix is a small man, but by taking a potion made by the village druid, Getafix, he is very strong and defeats many Romans. This infuriates the Romans, and they yearn to know the secret of his strength. ... Asterix and Obelix hear the Romans approaching.", 4),
("The walking dead", "Zizou", "2006-02-15", "available", "thriller", "The only thing that stops them is the Walkers, also known as Zombies. The Walking Dead tells the story of the months and years that follow after a zombie apocalypse. It follows a group of survivors, led by former police officer Rick Grimes, who travel in search of a safe and secure home.", 6),
("Les animeaux fantastiques", "JK Rowling", "2018-01-23", "available", "fantastique", "Norbert Dragonneau rentre à peine d'un périple à travers le monde où il a répertorié un bestiaire extraordinaire de créatures fantastiques. Il pense faire une courte halte à New York, mais une série d'événements et de rencontres inattendues risquent de prolonger son séjour. Désormais, le monde de la magie est menacé.", 4),
("Tintin au Pérou", "Hergé", "2000-02-20", "available", "animation", "Tintin est en vacances en Suisse, avec ses amis, le capitaine Haddock et le professeur Tournesol. Dans une paisible maison de vacances, il rêve de Tchang, un jeune ami chinois qu'il a rencontré dans l'album Le Lotus bleu : il voit Tchang blessé dans la neige, qui appelle Tintin au secours.", 2),
("Le seigneur des anneaux", "JR Tolkien", "2002-01-11", "available", "fantastique", "Un jeune et timide `Hobbit', Frodon Sacquet, hérite d'un anneau magique. Bien loin d'être une simple babiole, il s'agit d'un instrument de pouvoir absolu qui permettrait à Sauron, le `Seigneur des ténèbres', de régner sur la `Terre du Milieu' et de réduire en esclavage ses peuples. Frodon doit parvenir jusqu'à la Crevasse du Destin pour détruire l'anneau.", 2);

