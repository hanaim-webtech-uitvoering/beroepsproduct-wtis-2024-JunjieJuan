<?PHP
require_once './includes/test/test_data_functies.php';
require_once './includes/test/test_view_functies.php';

$pizza = testfunctie();

$pizzaHtml = testHtml($pizza);

echo var_dump($pizzaHtml);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pizza prijs</title>
</head>
<body>
  <h1>pizza met prijs</h1>
  <?= testHtml(testfunctie())  ?>
</body>
</html>