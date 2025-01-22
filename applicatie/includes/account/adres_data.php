<?php
session_start();
require_once(__DIR__ . '/../db_connectie.php');

if (!isset($_SESSION['uid'])) {
    die("Gebruiker niet ingelogd.");
}
$userId = $_SESSION['uid'];

try {
    $db = maakVerbinding();

    $sql = "SELECT address FROM users WHERE user_id = :user_id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['user_id' => 1]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $fullAddress = $row['address'] ?? '';

    // Gegevens ophalen en adres splitsen
    $addressParts = explode(',', $fullAddress);
    $street = trim($addressParts[0] ?? '');
    $postal = trim($addressParts[1] ?? '');
    $city = trim($addressParts[2] ?? '');
} catch (PDOException $e) {
    die("Fout: " . $e->getMessage());
}

// HTML-uitvoer
echo '<div class="confirm-order">';
echo '<div class="confirm-adres">';
echo '<h3>Vul adres in</h3>';
echo '<form action="#">';
echo '<label for="street">Straatnaam</label>';
echo '<input type="text" id="street" name="address" value="' . htmlspecialchars($street) . '" placeholder="Naamstraat 1" required>';
echo '<label for="postal">Postcode</label>';
echo '<input type="text" id="postal" name="postal" value="' . htmlspecialchars($postal) . '" placeholder="1234AB" required>';
echo '<label for="city">Stad</label>';
echo '<input type="text" id="city" name="city" value="' . htmlspecialchars($city) . '" placeholder="Arnhem" required>';
echo '</form>';
echo '</div>';
echo '<button class="checkout-btn" onclick="checkout()">Checkout</button>';
echo '</div>';
