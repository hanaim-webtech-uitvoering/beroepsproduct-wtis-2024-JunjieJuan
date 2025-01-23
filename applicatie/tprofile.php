<?php
$pageTitel = 'profiel';
require_once 'components/header.php';
?>
<main>
    <div class="topmargen">
        <div class="profileContainer">
            <div class="profileInfoWrapper">
                <form method="post" action="#">
                    <h1>Mijn gegevens</h1>
                    <div class="profile-form">
                        <label for="name">Voornaam & Achternaam:</label>
                        <div class="column">
                            <div class="form-control">
                                <input for="text" name="first_name" placeholder="Junjie" minlength="2" maxlength="15">
                            </div>
                            <div class="form-control">
                                <input for="text" name="last_name" placeholder="Juan" minlength="2" maxlength="15">
                            </div>
                        </div>
                    </div>

                    <div class="profile-form">
                        <label for="name">Gebruikersnaam:</label>
                        <div class="column">
                            Username
                        </div>
                    </div>

                    <h1>Mijn adres</h1>
                    <div class="profile-form">
                        <label for="adres">Straatnaam:</label>
                        <div class="column">
                            <div class="form-control">
                                <input for="text" id="address" placeholder="hanstraat" required>
                            </div>
                            <div class="form-control">
                                <input for="number" id="Nummer" placeholder="123" required>
                            </div>
                        </div>
                    </div>

                    <div class="profile-form">
                        <label for="postal">Postcode & stad:</label>
                        <div class="column">
                            <div class="form-control">
                                <input for="text" id="postal" placeholder="1234AB" required>
                            </div>
                            <div class="form-control">
                                <input for="text" id="city" placeholder="Arnhem" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn">Opslaan</button>

                </form>
            </div>

            <div class="customersOrderWrapper">
                <table class="customer-order-history-table">
                    <thead>
                        <tr>
                            <th>Order Nr.</th>
                            <th>Datum</th>
                            <th>Status</th>
                            <th>Extra info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>27-11-2024</td>
                            <td>onderweg</td>
                            <td>
                                <div class="order-detail-link">
                                    <a href="orderdetails.html">Info</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
?>