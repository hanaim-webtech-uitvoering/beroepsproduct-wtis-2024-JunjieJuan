<?php
function generateDeliveryHtml($processedData)
{
    $html = '<form method="post" action="includes/shoppingcart/process_order.inc.php">';
    $html .= '<div class="confirm-order">';
    $html .= '<div class="confirm-adres">';
    $html .= '<h3>Vul gegevens in</h3>';

    $html .= '<label for="first_name">Naam</label>';
    $html .= '<input type="text" name="first_name" value="' . htmlspecialchars($processedData['first_name'] ?? '', ENT_QUOTES, 'UTF-8') . '" ';
    $html .= 'placeholder="Voornaam" minlength="2" maxlength="15" required>';

    $html .= '<input type="text" name="last_name" value="' . htmlspecialchars($processedData['last_name'] ?? '', ENT_QUOTES, 'UTF-8') . '" ';
    $html .= 'placeholder="Achternaam" minlength="2" maxlength="15" required>';

    $html .= '<label for="adres">Straatnaam</label>';
    $html .= '<input type="text" name="street" value="' . htmlspecialchars($processedData['streetName'] ?? '', ENT_QUOTES, 'UTF-8') . '" ';
    $html .= 'placeholder="Straatnaam" required>';

    $html .= '<input type="text" name="number" value="' . htmlspecialchars($processedData['houseNumber'] ?? '', ENT_QUOTES, 'UTF-8') . '" ';
    $html .= 'placeholder="Nr." required>';

    $html .= '<label for="postal">Postcode</label>';
    $html .= '<input type="text" name="postal" value="' . htmlspecialchars($processedData['postalCode'] ?? '', ENT_QUOTES, 'UTF-8') . '" ';
    $html .= 'placeholder="Postcode" required>';

    $html .= '<label for="city">Stad</label>';
    $html .= '<input type="text" name="city" value="' . htmlspecialchars($processedData['city'] ?? '', ENT_QUOTES, 'UTF-8') . '" ';
    $html .= 'placeholder="Stad" required>';

    $html .= '<button type="submit" name="submit" class="checkout-btn">Checkout</button>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</form>';

    return $html;
}
