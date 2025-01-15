<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>

<body>
    <header class="header">
        <a href="index.html" class="logo"><img class="logo" src="images/Pizzalogo.png" alt="logo"
                style="width:100px;height:80px;"></a>
        <nav class="navbar">
            <ul>
                <li><a href="menuV2.html">Menu</a></li>
                <li><a href="profile.html">Profiel</a></li>
                <li><a href="orderview.html">Bestellingen</a></li>
                <li><a href="shoppingcard.html">winkelmandje</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="loginContainer">
            <div class="wrapper">
                <form action="#">
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Email" required>
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
                        <p>Geen account? <a href="register.html">Registreer</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="footerContainer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="algemenevoorwaarden.html">Algemene voorwaarden</a></li>
                <li><a href="Privacyverklaring.html">privacy statement</a></li>
            </ul>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Designed by Junjie Juan 1637823</p>
        </div>
    </footer>

</body>

</html>