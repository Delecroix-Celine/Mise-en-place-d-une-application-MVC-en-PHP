<?php

class Trajet
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Récupère tous les trajets disponibles
     *
     * @return array
     */
    public function getAvailableTrajets(): array
    {
        $sql = "
            SELECT t.*, a1.nom AS depart, a2.nom AS arrivee
            FROM trajet t
            JOIN agence a1 ON t.depart_agence_id = a1.id
            JOIN agence a2 ON t.arrivee_agence_id = a2.id
            WHERE t.depart_datetime > NOW()
            AND t.places_disponibles > 0
            ORDER BY t.depart_datetime ASC
        ";

        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Crée un trajet
     *
     * @param array $data
     * @return bool
     */
    public function create(array $data): bool
    {
        $sql = "INSERT INTO trajet
        (depart_agence_id, arrivee_agence_id, depart_datetime, arrivee_datetime,
         total_places, places_disponibles, auteur_id)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $data["depart_agence_id"],
            $data["arrivee_agence_id"],
            $data["depart_datetime"],
            $data["arrivee_datetime"],
            $data["total_places"],
            $data["places_disponibles"],
            $data["auteur_id"]
        ]);
    }
}
