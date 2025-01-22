<?php
require_once './adres_data.php';
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
