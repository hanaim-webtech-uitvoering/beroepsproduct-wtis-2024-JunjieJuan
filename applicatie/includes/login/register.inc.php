<?php
if(isset($_POST["submit"])){
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $username = $_POST["uid"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["password-repeat"];

    require_once '../db_connectie.php';
    require_once 'functions.inc.php';

    if(invalidUid($username) !== false) {
        header("location: ../../register.php?error=invaliduid");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../../register.php?error=passwordsdontmatch");
        exit();
    }
    if(uidExists($verbinding, $username) !== false) {
        header("location: ../../register.php?error=usernametaken");
        exit();
    }

    createUser($verbinding, $firstName, $lastName, $username, $pwd);


} else {
    header("location: ../../register.php");
    exit();
}
