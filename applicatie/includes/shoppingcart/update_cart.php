<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Haal de gegevens op
    $productName = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $newQuantity = (int)$_POST['quantity'];

    // Controleer of de winkelwagen bestaat
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['name'] === $productName) {
                // Werk de hoeveelheid bij
                if ($newQuantity > 0) {
                    $item['quantity'] = $newQuantity;
                } else {
                    // Verwijder het item als de hoeveelheid 0 is
                    $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($i) use ($productName) {
                        return $i['name'] !== $productName;
                    });
                }
                break;
            }
        }
    }
}

// Redirect terug naar de winkelwagenpagina
header('Location: /../../shoppingcart.php');
exit();
