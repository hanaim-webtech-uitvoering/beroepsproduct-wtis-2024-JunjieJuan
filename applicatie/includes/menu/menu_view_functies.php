<?php
function menuToHtmlTable($menuData) {
    $html = '<table>';

    $html = $html . '<tr><th>Naam</th><th>Prijs</th></tr>';
    
        foreach($menuData as $rij) {
            $naam = $rij['naam'];
            $prijs = $rij['prijs'];
            $html = $html . "<tr><td>$naam</td><td>$prijs</td></tr>";
        }

        $html = $html . "</table>";
    
        return $html;
}
?>
