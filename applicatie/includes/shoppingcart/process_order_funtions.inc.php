<?php
function getPersonnelUsername($verbinding)
{
    $sqlPersonnel = "SELECT TOP 1 username FROM [User] WHERE [role] = 'Personnel' ORDER BY NEWID()";

    try {
        $stmt = $verbinding->prepare($sqlPersonnel);
        $stmt->execute();
        $personnelUsername = $stmt->fetchColumn();

        if (!$personnelUsername) {
            header("location: ../../shoppingcart.php?error=personnelnotfound");
            exit();
        }
    } catch (PDOException $e) {
        header("location: ../../shoppingcart.php?error=foutbijophaalpersonnel");
        exit();
    }
    return $personnelUsername;
}


function createOrder($verbinding, $name, $address, $status = "1")
{
    $sqlPlaceOrder = "INSERT INTO Pizza_Order (client_username, client_name, personnel_username, datetime, status, address)
                VALUES (?, ?, ?, ?, ?, ?)";

    $clientUsername = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $orderDatetime = date('Y-m-d H:i:s');
    $personnelUsername = getPersonnelUsername($verbinding);

    try {
        $stmt = $verbinding->prepare($sqlPlaceOrder);
        $stmt->execute([$clientUsername, $name, $personnelUsername, $orderDatetime, $status, $address]);

        // laatst ingevoegde order_id ophalen
        $orderId = $verbinding->lastInsertId();

        foreach ($_SESSION['cart'] as $item) {
            $sqlPlaceItem = "INSERT INTO Pizza_Order_Product (order_id, product_name, quantity)
                VALUES (?, ?, ?)";

            $stmtItem = $verbinding->prepare($sqlPlaceItem);
            $stmtItem->execute([$orderId, $item['name'], $item['quantity']]);
        }
        unset($_SESSION['cart']);
        header("location: ../../index.php?error=none");
        exit();
    } catch (PDOException $e) {
        header("location: ../../shoppingcart.php?error=placeordererror");
        exit();
    }
}
