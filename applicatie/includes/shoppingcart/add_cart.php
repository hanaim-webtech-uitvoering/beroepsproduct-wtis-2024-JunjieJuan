<?php
session_start();
if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_name = filter_var($product_name, FILTER_SANITIZE_STRING);
    $product_price = $_POST['product_price'];
    $product_price = filter_var($product_price, FILTER_SANITIZE_STRING);
    $quantity = (int)$_POST['quantity'];
    $quantity = filter_var($quantity, FILTER_SANITIZE_STRING);

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    //controlleren of het al in de cart is
    $found = false;
    foreach ($_SESSION['cart'] as & $item) {
        if ($item['name'] === $product_name) {
            // If found, update the quantity
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }

    //product toevoegen aan de cart
    if (!$found) {
        $_SESSION['cart'][] = [
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $quantity
        ];
    }
}

header("location: /../../menuV2.php?error=productadded");
exit();

?>