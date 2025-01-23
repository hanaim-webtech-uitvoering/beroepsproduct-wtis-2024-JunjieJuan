<?php
$pageTitel = 'winkelmand';
require_once 'components/header.php';
require_once 'includes/account/data_userinfo.php';
require_once 'includes/account/proces_data_userinfo.php';

// Gegevens van de ingelogde gebruiker verwerken
$processedData = processUserData(getUserInfo());
?>
<main>
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
                            <input type="text" name="first_name" value="<?= htmlspecialchars($processedData['first_name'] ?? '') ?>"
                                placeholder="Voornaam" minlength="2" maxlength="15">
                            <input type="text" name="last_name" value="<?= htmlspecialchars($processedData['last_name'] ?? '') ?>"
                                placeholder="Achternaam" minlength="2" maxlength="15">

                            <label for="adres">Straatnaam</label>
                            <input type="text" name="street" value="<?= htmlspecialchars($processedData['streetName'] ?? '') ?>"
                                placeholder="Straat" required>
                            <input type="text" name="number" value="<?= htmlspecialchars($processedData['houseNumber'] ?? '') ?>"
                                placeholder="Nr." required>

                            <label for="postal">Postcode</label>
                            <input type="text" name="postal" value="<?= htmlspecialchars($processedData['postalCode'] ?? '') ?>"
                                placeholder="postcode" required>

                            <label for="city">Stad</label>
                            <input type="text" name="city" value="<?= htmlspecialchars($processedData['city'] ?? '') ?>"
                                placeholder="Stad" required>

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