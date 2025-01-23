<?php
$pageTitel = 'Registreer';
require_once 'components/header.php';
?>
<main>
    <div class="registerContainer">
        <div class="wrapper">
            <form method="post" action="includes/login/register.inc.php">
                <h1>Registreren</h1>

                <?php
                    if  (isset($_GET["error"])) {
                        if ($_GET["error"] == "invaliduid") {
                            echo "<p>Ongeldig gebruikersnaam</p>";
                        } else if ($_GET["error"] == "passwordsdontmatch") {
                            echo "<p>Wachtwoord komt niet overheen</p>";
                        } else if ($_GET["error"] == "usernametaken") {
                            echo "<p>Gebruikersnaam is al in gebruik</p>";
                        } else if ($_GET["error"] == "none") {
                            echo "<p>Account aangemaakt</p>";
                        }
                    }
                ?>
                <div class="input-box">
                    <label for="name">Naam</label>
                    <input type="text" name="first_name" placeholder="Voornaam" required>
                </div>

                <div class="input-box">
                    <input type="text" name="last_name" placeholder="Achternaam" required>
                </div>

                <div class="input-box">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" name="uid" placeholder="gebruikersnaam" required>
                </div>

                <div class="input-box">
                    <label for="password">Wachtwoord:</label>
                    <input type="password" name="password" placeholder="Wachtwoord" required>
                </div>

                <div class="input-box">
                    <input type="password" name="password-repeat" placeholder="Bevestig wachtwoord" required>
                </div>

                <button type="submit" name="submit" class="btn">Aanmaken</button>

                <div class="login-link">
                    <p>Al een account? <a href="login.php">Login</a></p>
                </div>

            </form>
        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
?>