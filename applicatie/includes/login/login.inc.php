<?php

if (isset($_POST['submit'])) {

    $username = $_POST['uid'];
    $pwd = $_POST['password'];

    require_once "../db_connectie.php";
    require_once 'functions.inc.php';

    loginUser($verbinding, $username, $pwd);

} else {
    header("location: ../../login.php?error=didnotsubmit");
    exit();
}