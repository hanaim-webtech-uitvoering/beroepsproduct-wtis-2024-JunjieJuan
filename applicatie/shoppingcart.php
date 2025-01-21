<?php
$pageTitel = 'winkelmand';
require_once 'components/header.php';
require_once './includes/shoppingcart/cart_view_functie.php';
echo generateShoppingCarthtml();
require_once 'components/footer.php';
