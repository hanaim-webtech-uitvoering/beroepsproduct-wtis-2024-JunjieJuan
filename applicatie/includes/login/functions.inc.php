<?php
function emptyInputSignup($firstName, $lastName, $username, $pwd, $pwdRepeat) {
    $result;
    if (empty($firstName) || empty($lastName) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($verbinding, $username) {
    $sql = "SELECT * FROM [User] WHERE username = ?;";

    try {
        $stmt = $verbinding->prepare($sql);

        $stmt->execute([$username]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return $row;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        header("location: ../../register.php?error=uidexist");
        exit();
    }
}

function createUser($verbinding, $firstName, $lastName, $username, $pwd, $role ="Client") {
    $sql = "INSERT INTO [User] (username, password, first_name, last_name, role)
            VALUES (?, ?, ?, ?, ?);";

    try {
        $stmt = $verbinding->prepare($sql);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt->execute([$username, $hashedPwd, $firstName, $lastName, $role]);

        header("location: ../../login.php?error=none");
        exit();
    } catch (PDOException $e) {
        header("location: ../../register.php?error=stmtfailed");
        exit();
    }
}
