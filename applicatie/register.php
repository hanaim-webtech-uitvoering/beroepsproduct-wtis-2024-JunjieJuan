<?php
$pageTitel = 'Registreer';
require_once 'components/header.php';
echo generateHeader();
?>
<main>
    <div class="registerContainer">
        <div class="wrapper">
            <form action="includes/login/register.inc.php" method="post">
                <h1>Registreren</h1>
                <div class="input-box">
                    <label for="first_name">Naam</label>
                    <input type="text" name="first_name" placeholder="Voornaam" required>
                </div>

                <div class="input-box">
                    <input type="text" name="last_name" placeholder="Achternaam" required>
                </div>

                <div class="input-box">
                    <label for="first_name">Gebruikersnaam</label>
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
echo generateFooter();
?>