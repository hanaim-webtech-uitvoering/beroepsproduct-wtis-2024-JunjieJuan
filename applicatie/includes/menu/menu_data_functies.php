<?php
require_once(__DIR__ . '/../db_connectie.php');

function getMenuItems() {
    $db = maakVerbinding();

    $sql = 'SELECT 
                p.type_id AS id, 
                p.name AS name, 
                p.price AS price, 
                COALESCE(
                    STRING_AGG(pi.ingredient_name, \', \'), 
                    \'Geen ingrediënten\'
                ) AS ingredients
            FROM Product p
            LEFT JOIN Product_Ingredient pi ON p.name = pi.product_name
            GROUP BY p.type_id, p.name, p.price
            ORDER BY p.type_id, p.name';

    $data = $db->prepare($sql);
    $data->execute();

    return $data->fetchAll(PDO::FETCH_ASSOC);
}

function getItembyId($item){

    $db = maakVerbinding();

    $sql = 'SELECT * FROM product p
            WHERE p.name = :item';

    $data = $db->prepare($sql);
    $data->execute();

    return $data->fetchAll(PDO::FETCH_ASSOC);
}

?>