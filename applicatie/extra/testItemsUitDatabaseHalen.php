<?php
require_once '../db_connectie.php';

// maak verbinding met de database (zie db_connection.php)
$db = maakVerbinding();

// haal alle componisten op en tel het aantal stukken
$query = 'select p.type_id as id, p.name as name, p.price as price, pi.ingredient_name as ingredient
          from Product P left outer join Product_Ingredient PI on  p.name = pi.product_name
          order by p.type_id, p.name';

$data = $db->query($query);

$html_table = '<table>';
$html_table = $html_table . '<tr><th>id</th><th>Naam</th><th>ingredient</th><th>prijs</th></tr>';

while($rij = $data->fetch()) {
    $id = $rij['id'];
    $naam = $rij['name'];
    $ingredient = $rij['ingredient'];
    $prijs = $rij['price'];
  
    $html_table = $html_table . "<tr><td>$id</td><td>$naam</td><td>$ingredient</td><td>$prijs</td></tr>";
}

$html_table = $html_table . "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    table,
    td,
    th {
      padding: 0px 2px 0px 5px;
      border: 1px solid black;
    }
    table { border-collapse: collapse; }
    td { text-align: left; }
    td:first-child { text-align: right; }
    td:last-child { text-align: center; }
  </style>
  <title>Componisten stukken</title>
</head>
<body>
  <h1>pizza met prijs</h1>
  <?php 
  echo ($html_table);
  ?>
</body>
</html>