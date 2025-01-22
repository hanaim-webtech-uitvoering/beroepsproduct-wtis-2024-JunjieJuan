<?php
session_start();
if(isset($_POST["submit"])){
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $street = trim($_POST['street']);
    $city = trim($_POST['city']);
    $postal = trim($_POST['postal']);

    $name = $first_name . " " . $last_name;
    $address = $street. " " . $postal . " " . $city;

    require_once '../db_connectie.php';
    require_once 'process_order_funtions.inc.php';

    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header("location: ../../shoppingcart.php?error=cartempty");
        exit();
    }

    createOrder($verbinding, $name, $address);

} else {
    header("location: ../../shoppingcart.php");
    exit();
}
