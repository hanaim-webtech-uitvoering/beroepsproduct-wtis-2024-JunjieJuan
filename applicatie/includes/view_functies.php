<?php
function niveausNaarHtmlTable($data) {
    // Begin van de "table"
    $html = '<table>';
    // De "table heads"
    $html = $html . '<tr><th>Code</th><th>Omschrijving</th></tr>';

    // Elke rij als een "table row"
    foreach($data as $rij) {
        $niveaucode = $rij['niveaucode'];
        $omschrijving = $rij['omschrijving'];
        $html = $html . "<tr><td>$niveaucode</td><td>$omschrijving</td></tr>";
    }
    // Eind van de "table"
    $html = $html . "</table>";

    // Geef de HTML terug
    return $html;
}
?>
