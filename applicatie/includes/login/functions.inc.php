<?php
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
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

// function loginUser($verbinding, $username, $pwd) {
//     $uidExists = uidExists($verbinding, $username);

//     if($uidExists  === false) {
//         header("location: ../../login.php?error=wrongusername");
//         exit();
//     }

//     $pwdHashed = $uidExists["password"];
//     $checkPwd = password_verify($pwd, $pwdHashed);

//     if($checkPwd === false) {
//         header("location: ../../login.php?error=wrongpassword");
//         exit();
//     } else if ($checkPwd === true) {
//         require_once '../session_example.php';
//         $_SESSION["username"] =  $uidExists["username"];
//         $_SESSION["role"] = $uidExists["role"];
        
//         header("location: ../../index.php?error=loggedin");
//         exit();
//     }
// }


function loginUser($verbinding, $username, $pwd) {
    $uidExists = uidExists($verbinding, $username);

    if ($uidExists === false) {
        header("location: ../../login.php?error=wrongusername");
        exit();
    }

    $storedPwd = $uidExists["password"];

    if (password_get_info($storedPwd)['algoName'] !== "unknown") {
        $checkPwd = password_verify($pwd, $storedPwd);
        if ($checkPwd === false) {
            header("location: ../../login.php?error=wrongpassword");
            exit();
        }
    } else {
        if ($pwd !== $storedPwd) {
            header("location: ../../login.php?error=wrongpassword");
            exit();
        }
    }

    session_start();
    $_SESSION["username"] = $uidExists["username"];
    $_SESSION["role"] = $uidExists["role"];
    header("location: ../../index.php?error=loggedin");
    exit();
}
