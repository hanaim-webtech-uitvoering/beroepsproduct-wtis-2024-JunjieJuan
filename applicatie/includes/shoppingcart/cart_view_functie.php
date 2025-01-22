<?php
function generateShoppingCarthtml()
{

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
            echo '<td>
            <form method="post" action="includes/shoppingcart/update_cart.php">
                <input type="hidden" name="name" value="' . htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8') . '">
                <input type="number" name="quantity" value="' . $item['quantity'] . '" min="0">
                <button type="submit">Update</button>
            </form>
            </td>';
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
}
