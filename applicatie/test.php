<?php
$pageTitel = 'Registreer';
require_once 'components/header.php';




require_once './includes/test/test_data_functies.php';
require_once './includes/test/test_view_functies.php';
$pizza = testfunctie();
$pizzaHtml = testHtml($pizza);
echo var_dump($pizzaHtml);

?>

<body>
  <h1>pizza met prijs</h1>
  <?= testHtml(testfunctie())  ?>
</body>

<?php
require_once 'components/footer.php';
?>