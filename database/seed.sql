INSERT INTO agence (nom) VALUES
('Paris'),
('Lyon'),
('Marseille'),
('Toulouse');

-- Admin (password = admin123)
INSERT INTO employe (prenom, nom, email, telephone, password, role) VALUES
('Alice', 'Admin', 'admin@entreprise.fr', '0102030405',
'$2y$10$e0NRwX2cZyB2XcO9dZp3luZ1QkGfGkW9V1YfUOq6WZK8D4XQqZ5kK',
'ADMIN');

-- User (password = user123)
INSERT INTO employe (prenom, nom, email, telephone, password, role) VALUES
('Jean', 'Dupont', 'user@entreprise.fr', '0607080910',
'$2y$10$wH9yZg5hKqj7w6OqGzYvQeP0fPZbQFfEoO1l7zQ7nZcYy2O4cHc9W',
'USER');

-- Trajets
INSERT INTO trajet
(depart_agence_id, arrivee_agence_id, depart_datetime, arrivee_datetime,
 total_places, places_disponibles, auteur_id)
VALUES
(1, 2, '2026-02-20 08:00:00', '2026-02-20 10:00:00', 4, 3, 2),
(2, 3, '2026-02-21 09:00:00', '2026-02-21 13:00:00', 3, 1, 2);
