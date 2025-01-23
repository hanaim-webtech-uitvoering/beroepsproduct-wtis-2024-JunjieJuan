<?php
require_once(__DIR__ . '/../db_connectie.php');
function getUserOrderHistory() {
    $db = maakVerbinding();
    $username = $_SESSION['username'];
    $sql = "SELECT order_id, FORMAT(datetime, 'yyyy-MM-dd HH:mm') AS date, status
            FROM [Pizza_Order]
            WHERE client_username = :username
            ORDER BY datetime DESC";

    $data = $db->prepare($sql);
    $data->bindParam(':username', $username, PDO::PARAM_STR);
    $data->execute();

    return $data->fetchAll(PDO::FETCH_ASSOC);
}