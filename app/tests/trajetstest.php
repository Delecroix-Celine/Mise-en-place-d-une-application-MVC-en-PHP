<?php

use PHPUnit\Framework\TestCase;

require_once "../app/Models/Database.php";
require_once "../app/Models/Trajet.php";

class TrajetTest extends TestCase
{
    public function testCreateTrajet()
    {
        $db = Database::connect();
        $trajet = new Trajet($db);

        $result = $trajet->create([
            "depart_agence_id" => 1,
            "arrivee_agence_id" => 2,
            "depart_datetime" => "2026-03-01 08:00:00",
            "arrivee_datetime" => "2026-03-01 10:00:00",
            "total_places" => 4,
            "places_disponibles" => 2,
            "auteur_id" => 2
        ]);

        $this->assertTrue($result);
    }
}
