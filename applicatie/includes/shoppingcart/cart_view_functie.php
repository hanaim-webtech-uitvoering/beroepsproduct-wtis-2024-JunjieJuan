<?php
function generateShoppingCarthtml()
{
    echo '<main>';
    echo '<div class="topmargen">';
    echo '<div class="orderContainer">';
    echo '<div class="order-list">';
    echo '<h1>Bestelling</h1>';

    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo '<p>Your cart is empty.</p>';
    } else {
        echo '<table class="cart-table">';
        echo '<thead><tr><th>Pizza Nam</th><th>prijs</th><th>Aantal</th><th>Totaal</th></tr></thead>';

        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $itemTotal = $item['price'] * $item['quantity'];
            $total += $itemTotal;

            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . htmlspecialchars($item['name']) . '</td>';
            echo '<td>€ ' . number_format($item['price'], 2) . '</td>';
            echo '<td><form action="includes/shoppingcart/update_cart.php"><input type="number" name="quantity" value="' . $item['quantity'] . '"min="0">';
            echo '<button type="submit">Update</button>';
            echo '</form></td>';
            echo '<td>€ ' . number_format($itemTotal, 2) . '</td>';
            echo '</tr>';
            echo '<tbody>';
        }

        echo '</table>';
        echo '<div class="total-price">Total: € ' . number_format($total, 2) . '</div>';
        echo '<form method="post" action="includes/shoppingcart/clear_cart.php">';
        echo '<button type="submit">verwijder alles</button>';
        echo '</form>';
        echo '</div>';
    }
    echo '<div class="confirm-order">';
    echo '<div class="confirm-adres">';
    echo '<h3>Vul adres in</h3>';
    echo '<form action="#">';
    echo '<label for="adres">Straatnaam</label>';
    echo '<input type="text" id="street" name="address" placeholder="hanstraat  123" required>';

    echo '<label for="city">Stad</label>';
    echo '<input type="text" id="city" name="city" placeholder="Arnhem" required>';

    echo '<label for="postal">Postcode</label>';
    echo '<input type="text" id="postal" name="postal" placeholder="1234AB" required>';

    echo '<label for="phone">Telefoonnummer</label>';
    echo '<input type="tel" id="phone" placeholder="06-1234567" pattern="[0-9]{2}-[0-9]{7}" required>';
    echo '</form>';
    echo '</div>';
    echo '<button class="checkout-btn" onclick="checkout()">Checkout</button>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
    echo '</main>';
}
