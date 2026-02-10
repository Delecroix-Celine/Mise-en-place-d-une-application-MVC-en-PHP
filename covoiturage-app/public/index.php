<?php
session_start();

require_once "../app/Models/Database.php";
require_once "../app/Models/Trajet.php";

$db = Database::connect();

$trajetModel = new Trajet($db);
$trajets = $trajetModel->getAvailableTrajets();

require_once "../app/Views/home.php";

mysql -u root -p covoiturage < database/schema.sql
mysql -u root -p covoiturage < database/seed.sql
