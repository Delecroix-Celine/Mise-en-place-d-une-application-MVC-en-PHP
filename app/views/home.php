<h1>Trajets disponibles</h1>

<?php foreach ($trajets as $trajet): ?>
    <p>
        <?= $trajet["depart"] ?> →
        <?= $trajet["arrivee"] ?> |
        Départ : <?= $trajet["depart_datetime"] ?> |
        Places : <?= $trajet["places_disponibles"] ?>
    </p>
<?php endforeach; ?>
