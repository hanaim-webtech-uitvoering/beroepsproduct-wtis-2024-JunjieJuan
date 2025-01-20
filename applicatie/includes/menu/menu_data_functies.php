<?php
require_once(__DIR__ . '/../db_connectie.php');

function getAllItems()
{
    $db = maakVerbinding();

    $query = 'select name, price
          from product';

    $menuData = $db->query($query);

    return $menuData;
}
