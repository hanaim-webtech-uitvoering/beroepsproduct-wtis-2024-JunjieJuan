<?php
    session_start();
    include "./applicatie/db_connectie.php";

    if(isset($_POST['username']) && isset($_POST['password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)) {
        header ("Location: index.php?error=User Name is required");
        exit();
    } else     if(empty($password)) {
        header ("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);