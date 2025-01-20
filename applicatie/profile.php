<?php
$pageTitel = 'profiel';
require_once 'components/header.php';
?>
<main>
    <div class="topmargen">
        <div class="profileContainer">
            <div class="profileInfoWrapper">
                <form action="#">
                    <h1>Mijn gegevens</h1>
                    <div class="profile-form">
                        <div class="gender-option">
                            <div class="gender">
                                <input type="radio" id="check-male" name="gender" checked>
                                <label for="check-male">Dhr.</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-female" name="gender">
                                <label for="check-female">Mevr.</label>
                            </div>
                            <div class="gender">
                                <input type="radio" id="check-ither" name="gender">
                                <label for="check-other">Other</label>
                            </div>
                        </div>
                    </div>

                    <div class="profile-form">
                        <label for="name">Voornaam & Achternaam:</label>
                        <div class="column">
                            <div class="form-control">
                                <input for="text" id="first_name" placeholder="Junjie" minlength="2" maxlength="15">
                            </div>
                            <div class="form-control">
                                <input for="text" id="last_name" placeholder="Juan" minlength="2" maxlength="15">
                            </div>
                        </div>
                    </div>

                    <div class="profile-form">
                        <label for="name">Telefoonnummer:</label>
                        <div class="column">
                            <div class="form-control">
                                <input for="tel" id="phone" placeholder="06-1234567" pattern="[0-9]{2}-[0-9]{7}">
                            </div>
                        </div>
                    </div>

                    <div class="profile-form">
                        <label for="email">E-mailadres:</label>
                        <div class="column">
                            <div class="form-control">
                                <input for="email" id="email" placeholder="junjiejuan@student.han.nl">
                            </div>
                        </div>
                    </div>

                    <div class="profile-form">
                        <label for="bday">Geboortedatum</label>
                        <div class="column">
                            <div class="form-control">
                                <input type="date" id="bday">
                            </div>
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
                            <div class="form-control">
                                <input for="text" id="add" placeholder="Toev.">
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

                    <button type="submit" class="btn">Opslaan</button>

                </form>
            </div>

            <div class="customersOrderWrapper">
                <div class="customer-order-status">
                    <h1>Order #32</h1>
                    <h2>Status</h2>
                    <div class="status status-process">process</div>
                </div>
                <table class="customer-order-history-table">
                    <thead>
                        <tr>
                            <th>Datum</th>
                            <th>Quantity</th>
                            <th>Bedrag</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>27-11-2024</td>
                            <td>2</td>
                            <td>$32.49</td>
                            <td>
                                <div class="order-detail-link">
                                    <a href="orderdetails.html">Info</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>17-09-2024</td>
                            <td>6</td>
                            <td>$143.99</td>
                            <td>
                                <div class="order-detail-link">
                                    <a href="orderdetails.html">Info</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>26-04-2024</td>
                            <td>1</td>
                            <td>$12.97</td>
                            <td>
                                <div class="order-detail-link">
                                    <a href="orderdetails.html">Info</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>05-12-2023</td>
                            <td>7</td>
                            <td>$212.34</td>
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