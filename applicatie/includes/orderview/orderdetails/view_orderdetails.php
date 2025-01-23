<?php
function generateOrderDetails($data)
{
    if (empty($data)) {
        header("location: ../../../index.php?error=orderdetailsdatanietopgehaald");
        exit();
    }

    $order_id = $data[0]['order_id'];
    $total_order_price = $data[0]['total_order_price'];
    $address = $data[0]['address'];

    $html = '<div class="order-detail-container">';
    $html .= "<div class='order-detail-header'><h2>Order #$order_id</h2></div>";
    $html .= '<table class="order-detail-table">';
    $html .= '<thead><tr><th>Item</th><th>Quantity</th><th>Price (Each)</th><th>Total Price</th></tr></thead>';
    $html .= '<tbody>';

    foreach ($data as $row) {
        $product_name = htmlspecialchars($row['product_name']);
        $quantity = htmlspecialchars($row['quantity']);
        $price_per_item = number_format($row['price_per_item'], 2);
        $total_price_per_item = number_format($row['total_price_per_item'], 2);

        $html .= "<tr>
                    <td>$product_name</td>
                    <td>$quantity</td>
                    <td>€$price_per_item</td>
                    <td>€$total_price_per_item</td>
                  </tr>";
    }

    $html .= '</tbody></table>';
    $html .= "<div class='total'><strong>Totaal: €" . number_format($total_order_price, 2) . "</strong></div>";
    $html .= "<div class='address'>
                <h3>Bezorgadres</h3>
                <p>$address</p>
              </div>";
    $html .= '<button onclick="history.back()" class="btn-back">Terug</button>';
    $html .= '</div>';

    return $html;
}