<?php
require_once './includes/session_example.php';
function generateHeader(){
    global $pageTitel;
    $header = <<<HEAD
    <!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>$pageTitel</title>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="index.html" class="logo"><img class="logo" src="images/Pizzalogo.png" alt="logo"
                    style="width:100px;height:80px;"></a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="menuV2.html">Menu</a></li>
                <li><a href="profile.html">Profiel</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="shoppingcard.html">winkelmandje</a></li>
            </ul>
        </nav>
    </header>
HEAD;
    return $header;
}
?>
