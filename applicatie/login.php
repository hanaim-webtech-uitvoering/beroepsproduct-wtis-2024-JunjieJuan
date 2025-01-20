<?php
$pageTitel = 'login';
require_once 'components/header.php';
?>
<main>
    <div class="loginContainer">
        <div class="wrapper">
            <form action="includes/login/login.inc.php" method="post">
                <h1>Login</h1>
                <?php
                    if  (isset($_GET["error"])) {
                        if ($_GET["error"] == "invaliduid") {
                            echo "<p>Ongeldig gebruikersnaam</p>";
                        } else if ($_GET["error"] == "wrongpassword") {
                            echo "<p>Wachtwoord verkeerd</p>";
                        } else if ($_GET["error"] == "loggedin") {
                            echo "<p>logged in</p>";
                        }
                    }
                ?>
                <div class="input-box">
                    <input type="text" name= "uid" placeholder="Gebruikersnaam" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Wachtwoord" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Onthoud mij</label>
                    <a href="passwordreset.html">Wachtwoord vergeten?</a>
                </div>
                <button type="submit" name="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Geen account? <a href="register.php">Registreer</a></p>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
?>