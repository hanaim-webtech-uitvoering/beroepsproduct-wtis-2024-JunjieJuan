<?php
function testHtml($data) {
    $html_table = '<table>';
    $html_table = $html_table . '<tr><th>id</th><th>Naam</th><th>ingredient</th><th>prijs</th></tr>';

    while ($rij = $data->fetch()) {
        $id = $rij['id'];
        $naam = $rij['name'];
        $ingredient = $rij['ingredient'];
        $prijs = $rij['price'];

        $html_table = $html_table . "<tr><td>$id</td><td>$naam</td><td>$ingredient</td><td>$prijs</td></tr>";
    }

    $html_table = $html_table . "</table>";

    return $html_table;
}
?>