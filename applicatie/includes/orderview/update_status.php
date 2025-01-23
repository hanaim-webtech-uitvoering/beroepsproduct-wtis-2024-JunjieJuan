<?php
require_once(__DIR__ . '/../db_connectie.php');

if (isset($_POST['submit'])) {
    $order_id = $_POST['order_id'];
    $status = $_POST['status'];

    if (!in_array($status, ['1', '2', '3'])) {
        header("Location: order_overview.php?error=invalidstatus");
        exit();
    }

    try {
        $sql = "UPDATE Pizza_Order SET status = ? WHERE order_id = ?";
        $stmt = $verbinding->prepare($sql);
        $stmt->execute([$status, $order_id]);

        header("Location: /../../orderview.php?error=none");
        exit();
    } catch (PDOException $e) {
        header("Location: /../../orderview.php?error=updatefailed");
        exit();
    }
} else {
    header("Location: order_overview.php");
    exit();
}