<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>It Works!</h1>
    <?php echo ('Hallo WT\'er, de webserver is online en PHP werkt.'); ?>
    <br>
    <br>
    Alle technische informatie over je webserver vind je hier: <a href="phpinfo.php">http://<?= $_SERVER['HTTP_HOST'] ?>/phpinfo.php</a>
    <br>
    <br>
    Een voorbeeld van een pagina die gegevens uit de database haalt vind je hier: <a href="componist-aantalstukken.php">http://<?= $_SERVER['HTTP_HOST'] ?>/componist-aantalstukken.php</a>
    <br>
    <h2>Alles hieronder is om te testen wat het doet</h2>
    <?php
    $tekst = '<h1>PHP - Hoofdstuk 1</h1>';

    echo $tekst . '<br>';

    echo strlen($tekst) . '<br>';

    echo strtoupper($tekst) . '<br>';

    echo strip_tags($tekst) . '<br>';

    // In het volgende voorbeeld begin je niet een string met " of ' maar met <<<EOD.
    // Deze eindigt vervolgens ook weer met EOD, wat staat voor END OF DEFINITION.
    // Je geeft eigenlijk aan dat je hier een string wilt die over meerdere regels doorgaat.
    $campert = <<<EOD
Verzet begint niet met grote woorden
maar met kleine daden

zoals storm met zacht geritsel in de tuin
of de kat die de kolder in zijn kop krijgt

zoals brede rivieren
met een kleine bron
verscholen in het woud

zoals een vuurzee
met dezelfde lucifer
die een sigaret aansteekt

zoals liefde met een blik
een aanraking iets wat je opvalt in een stem

jezelf een vraag stellen
daarmee begint verzet

en dan die vraag aan een ander stellen.
EOD;
    echo $campert . '<br>';
    echo strlen($campert) . '<br>';

    $getal = 0;
    $tekst = '';

    $getal += 10;
    $getal--;
    $getal %= 3;
    $getal *= 133;
    $getal++;

    $tekst .= 'Berekeningen <br>';
    $tekst .= 'De uitkomst is: ' . $getal;

    echo $tekst . '<br><br>';

    $consumpties = [
        'Bier' => 3.50,
        'Spa rood' => 2.40,
        'borrelnoten' => 4
      ];
      
      $totaal = 0;
      $bon = '';
      
      // hieronder is `$consumptie` de key
      // en `$prijs` de value
      foreach ($consumpties as $consumptie => $prijs) {
        $bon .= "$consumptie: $prijs<br>";
        $totaal += $prijs;
      }
      
      echo $bon . "--------------------<br>Totaal: " . $totaal;
      
    ?>

</body>

</html>