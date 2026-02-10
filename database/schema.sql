DROP TABLE IF EXISTS trajet;
DROP TABLE IF EXISTS employe;
DROP TABLE IF EXISTS agence;

CREATE TABLE agence (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE employe (
  id INT AUTO_INCREMENT PRIMARY KEY,
  prenom VARCHAR(100) NOT NULL,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL,
  telephone VARCHAR(20),
  password VARCHAR(255) NOT NULL,
  role ENUM('USER','ADMIN') DEFAULT 'USER'
);

CREATE TABLE trajet (
  id INT AUTO_INCREMENT PRIMARY KEY,
  depart_agence_id INT NOT NULL,
  arrivee_agence_id INT NOT NULL,
  depart_datetime DATETIME NOT NULL,
  arrivee_datetime DATETIME NOT NULL,
  total_places INT NOT NULL,
  places_disponibles INT NOT NULL,
  auteur_id INT NOT NULL,

  FOREIGN KEY (depart_agence_id) REFERENCES agence(id),
  FOREIGN KEY (arrivee_agence_id) REFERENCES agence(id),
  FOREIGN KEY (auteur_id) REFERENCES employe(id)
);
