<?php
require_once(__DIR__ . '/../db_connectie.php');
function getUserInfo() {
    $db = maakVerbinding();
    $username = $_SESSION['username'];
    $sql = "SELECT username, first_name, last_name, address
            FROM [User]
            WHERE username = :username";

    $data = $db->prepare($sql);
    $data->bindParam(':username', $username, PDO::PARAM_STR);
    $data->execute();

    return $data->fetchAll(PDO::FETCH_ASSOC);
}