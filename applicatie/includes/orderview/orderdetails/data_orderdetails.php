<?php
require_once(__DIR__ . '/../../db_connectie.php');
function getOrderDetails($order_id)
{
    $db = maakVerbinding();

    if (!isset($order_id)) {
        throw new Exception("Order ID is not set in the session.");
    }

    $sql = "SELECT po.order_id, p.name AS product_name, pop.quantity, p.price AS price_per_item,
                   (pop.quantity * p.price) AS total_price_per_item, po.address,
                   ( SELECT SUM(pop_inner.quantity * p_inner.price)
                     FROM Pizza_Order_Product pop_inner
                     JOIN Product p_inner ON pop_inner.product_name = p_inner.name
                     WHERE pop_inner.order_id = po.order_id
                   ) AS total_order_price
            FROM Pizza_Order po
            JOIN Pizza_Order_Product pop ON po.order_id = pop.order_id
            JOIN Product p ON pop.product_name = p.name
            WHERE po.order_id = :order_id
            ORDER BY product_name;";

    $data = $db->prepare($sql);
    $data->bindParam(':order_id', $order_id, PDO::PARAM_INT);
    $data->execute();

    return $data->fetchAll(PDO::FETCH_ASSOC);
}
