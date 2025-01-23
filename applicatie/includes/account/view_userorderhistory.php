<?php
function generateUserOrderHistory($data)
{
    $statusMapping = [
        1 => 'Proces',
        2 => 'Onderweg',
        3 => 'Bezorgd',
    ];

    $html = '<h2>Mijn bestellingen</h2>';
    $html .= '<table class="customer-order-history-table">';
    $html .= '<thead><tr><th>Order Nr.</th><th>Datum</th><th>Status</th><th>Extra info</th></tr></thead>';
    $html .= '<tbody>';

    foreach($data as $row){
        $order_id = $row['order_id'];
        $date = $row['date'];
        $statusCode = $row['status'];
        $status = $statusMapping[$statusCode] ?? ' ';

        $html .= "<tr><td>#$order_id</td><td>$date</td><td>$status</td>";
        $html .= '<td>
                    <div class="order-detail-link">
                        <a href="orderdetails.php?order_id=' . $order_id . '">Info</a>
                    </div>
                  </td>';
        $html .= '</tr>';
    }

    $html .= '</tbody></table>';
    return $html;
}
