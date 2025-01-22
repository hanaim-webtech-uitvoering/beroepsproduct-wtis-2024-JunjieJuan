<?php
$pageTitel = 'winkelmand';
require_once 'components/header.php';
?>
<main>';
    <div class="topmargen">
        <div class="orderContainer">
            <div class="order-list">
                <h1>Bestelling</h1>
                <?php
                require_once './includes/shoppingcart/cart_view_functie.php';
                echo generateShoppingCarthtml();
                ?>
                <form method="post" action="includes/shoppingcart/process_order.inc.php">
                    <div class="confirm-order">
                        <div class="confirm-adres">
                            <h3>Vul gegevens in</h3>
                            <label for="first_name">Naam</label>
                            <input type="text" name="first_name" placeholder="Voornaam" required>
                            <input type="text" name="last_name" placeholder="Achternaam" required>

                            <label for="adres">Straatnaam</label>
                            <input type="text" name="street" placeholder="hanstraat  123" required>

                            <label for="city">Stad</label>
                            <input type="text" name="city" placeholder="Arnhem" required>

                            <label for="postal">Postcode</label>
                            <input type="text" name="postal" placeholder="1234AB" required>

                            <button type="submit" name="submit" class="checkout-btn">Checkout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
?>