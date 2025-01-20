<?php
require_once(__DIR__ . '/../db_connectie.php');

function testfunctie(){
    $db = maakVerbinding();

    $query = 'select p.type_id as id, p.name as name, p.price as price, pi.ingredient_name as ingredient
    from Product P left outer join Product_Ingredient PI on  p.name = pi.product_name
    order by p.type_id, p.name';

    $data = $db->query($query);

    return $data;
}
