<?php
require_once 'db_connectie.php';

function haalAlleNiveausOp() {
    // maak verbinding met de database (zie db_connection.php)
    $db = maakVerbinding();

    // haal niveaus op (code en omschijving)
    $query = 'select niveaucode, omschrijving
              from Niveau';
    // voer de query uit op de database
    $data = $db->query($query);
    // Geef de data terug
    return $data;
}
?>
