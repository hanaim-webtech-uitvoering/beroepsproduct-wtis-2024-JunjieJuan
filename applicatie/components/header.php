<?php
require_once './includes/session_example.php';
global $pageTitel;
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $pageTitel; ?></title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="index.php" class="logo"><img class="logo" src="images/Pizzalogo.png" alt="logo"
                    style="width:100px;height:80px;"></a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="menuV2.php">Menu</a></li>
                <?php 
                    if (isset($_SESSION["role"]) && $_SESSION["role"] === "Client") {
                        echo '<li><a href="shoppingcard.php">winkelmandje</a></li>'; 
                        echo '<li><a href="profile.php">Profiel</a></li>';
                    } else if(isset($_SESSION["role"]) && $_SESSION["role"] === "Personnel") {
                        echo '<li><a href="orderview.php">Bestellingen</a></li>';
                    } else {
                        echo '<li><a href="shoppingcard.php">winkelmandje</a></li>'; 
                    }

                    if(isset($_SESSION["username"])) {
                        echo '<li><a href="includes/login/logout.inc.php">Log uit</a></li>';
                    } else {
                        echo '<li><a href="login.php">Login</a></li>'; 
                    }
                ?>
            </ul>
        </nav>
    </header>