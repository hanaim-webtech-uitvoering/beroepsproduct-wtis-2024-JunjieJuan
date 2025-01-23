<?php
require_once(__DIR__ . '/../db_connectie.php');
session_start();
if (isset($_POST['submit'])) {
    // Haal de gegevens op uit het formulier
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $street = trim($_POST['address']);
    $houseNumber = trim($_POST['Nummer']);
    $postalCode = trim($_POST['postal']);
    $city = trim($_POST['city']);
    $username = $_SESSION['username'] ?? null;

    // Controleer of verplichte velden zijn ingevuld
    if (empty($first_name) || empty($last_name)) {
        header("Location: ../profile.php?error=missingfields");
        exit();
    }

    // Combineer adresdelen als ze zijn ingevuld
    $complete_address = null;
    if (!empty($street) || !empty($houseNumber) || !empty($postalCode) || !empty($city)) {
        $complete_address = $street . ' ' . $houseNumber . ' ' . $postalCode . ' ' . $city;
    }

    // Controleer of de gebruiker is ingelogd
    if (!$username) {
        header("Location: /../../profile.php?error=notloggedin");
        exit();
    }

    try {
        $sql = "UPDATE [User] SET first_name = ?, last_name = ?, address = ? WHERE username = ?";
        $stmt = $verbinding->prepare($sql);
        $stmt->execute([$first_name, $last_name, $complete_address, $username]);

        header("Location: /../../profile.php?error=none");
        exit();
    } catch (PDOException $e) {
        header("Location: /../../profile.php?error=updatefailed");
        exit();
    }
} else {
    header("Location: /../../profile.php");
    exit();
}
