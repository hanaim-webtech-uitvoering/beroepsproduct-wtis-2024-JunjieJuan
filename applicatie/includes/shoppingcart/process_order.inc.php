<?php
session_start();
if(isset($_POST["submit"])){
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $street = trim($_POST['street']);
    $houseNumber = trim($_POST['number']);
    $postalCode = trim($_POST['postal']);
    $city = trim($_POST['city']);
    $name = $first_name . " " . $last_name;
    $complete_address = $street . ' ' . $houseNumber . ' ' . $postalCode . ' ' . $city;

    require_once '../db_connectie.php';
    require_once 'process_order_funtions.inc.php';

    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header("location: ../../shoppingcart.php?error=cartempty");
        exit();
    }

    createOrder($verbinding, $name, $complete_address);

} else {
    header("location: ../../shoppingcart.php");
    exit();
}
