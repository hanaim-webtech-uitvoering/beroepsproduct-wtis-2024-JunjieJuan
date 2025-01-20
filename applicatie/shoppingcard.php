<?php
$pageTitel = 'winkelmand';
require_once 'components/header.php';
echo generateHeader();
?>
<main>
    <div class="topmargen">
        <div class="orderContainer">
            <div class="order-list">
                <h2>Bestelling</h2>
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Pizza Name</th>
                            <th>Quantity</th>
                            <th>Price (Each)</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pepperoni Pizza</td>
                            <td>
                                <form action="#">
                                    <input type="number" name="quantity" value="2" min="1">
                                </form>
                            </td>
                            <td>$12.99</td>
                            <td>$25.98</td>
                        </tr>
                        <tr>
                            <td>Margherita Pizza</td>
                            <td>
                                <form action="#">
                                    <input type="number" name="quantity" value="1" min="1">
                                </form>
                            </td>
                            <td>$10.99</td>
                            <td>$10.99</td>
                        </tr>
                        <tr>
                            <td>BBQ Chicken Pizza</td>
                            <td>
                                <form action="#">
                                    <input type="number" name="quantity" value="5" min="1">
                                </form>
                            </td>
                            <td>$14.99</td>
                            <td>$44.97</td>
                        </tr>
                    </tbody>
                </table>

                <div class="total-price">
                    Total: $81.94
                </div>
            </div>
            <div class="confirm-order">
                <div class="confirm-adres">
                    <h3>Vul adres in</h3>
                    <form action="#">
                        <label for="adres">Straatnaam</label>
                        <input type="text" id="street" name="address" placeholder="hanstraat  123" required>

                        <label for="city">Stad</label>
                        <input type="text" id="city" name="city" placeholder="Arnhem" required>

                        <label for="postal">Postcode</label>
                        <input type="text" id="postal" name="postal" placeholder="1234AB" required>

                        <label for="phone">Telefoonnummer</label>
                        <input type="tel" id="phone" placeholder="06-1234567" pattern="[0-9]{2}-[0-9]{7}" required>
                    </form>
                </div>
                <button class="checkout-btn" onclick="checkout()">Checkout</button>
            </div>

        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
echo generateFooter();
?>