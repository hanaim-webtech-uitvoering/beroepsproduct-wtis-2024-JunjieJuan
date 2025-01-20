<?php
$pageTitel = 'login';
require_once 'components/header.php';
echo generateHeader();
?>
<main>
    <div class="loginContainer">
        <div class="wrapper">
            <form action="includes/login/login.inc.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Gebruikersnaam" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Wachtwoord" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Onthoud mij</label>
                    <a href="passwordreset.html">Wachtwoord vergeten?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Geen account? <a href="register.php">Registreer</a></p>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
echo generateFooter();
?>