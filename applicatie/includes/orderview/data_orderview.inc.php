<?php
require_once(__DIR__ . '/../db_connectie.php');

function getOrderView() {
    $db = maakVerbinding();

    $sql = "SELECT order_id, FORMAT(datetime, 'HH:mm') AS time, status, address 
            FROM [Pizza_Order]";

    $data = $db->prepare($sql);
    $data->execute();

    return $data->fetchAll(PDO::FETCH_ASSOC);
}