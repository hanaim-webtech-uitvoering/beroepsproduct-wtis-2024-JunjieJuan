<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $newQuantity = (int)$_POST['quantity'];

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as & $item) {
            if ($item['name'] === $productName) {
                if ($newQuantity > 0) {
                    $item['quantity'] = $newQuantity;
                } else {
                    // Verwijder item als 0 is
                    $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($i) use ($productName) {
                        return $i['name'] !== $productName;
                    });
                }
                break;
            }
        }
    }
}
header('Location: /../../shoppingcart.php');
exit();
