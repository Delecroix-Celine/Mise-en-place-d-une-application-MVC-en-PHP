CREATE TABLE employe (
  id INT AUTO_INCREMENT PRIMARY KEY,
  prenom VARCHAR(100),
  nom VARCHAR(100),
  email VARCHAR(150) UNIQUE,
  telephone VARCHAR(20),
  password VARCHAR(255),
  role ENUM('USER','ADMIN')
);
