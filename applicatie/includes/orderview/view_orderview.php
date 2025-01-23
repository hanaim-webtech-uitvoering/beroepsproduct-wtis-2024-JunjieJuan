<?php
function generateOrderView($data)
{
    $html = '<table class="order-overview-table">';

    $html = $html . '<tr><th>Order Nr.</th><th>Time</th><th>Adres</th><th>Status</th><th>Extra info</th></tr>';

    // Elke rij als een "table row"
    foreach ($data as $rij) {
        $order_id = $rij['order_id'];
        $time = $rij['time'];
        $status = $rij['status'];
        $address = $rij['address'];
        $html = $html . "<tr><td>$order_id</td><td>$time</td><td>$address</td>";
        $html = $html . '<td>
            <form method="post" action="includes/orderview/update_status.php" class="status-form">
                <input type="hidden" name="order_id" value="' . $order_id . '">
                <label for="status">Status</label>
                <select id="status" name="status">
                    <option value="1"' . ($status == 1 ? ' selected' : '') . '>Proces</option>
                    <option value="2"' . ($status == 2 ? ' selected' : '') . '>Onderweg</option>
                    <option value="3"' . ($status == 3 ? ' selected' : '') . '>Bezorgd</option>
                </select>
                <button type="submit" name="submit" class="btn">Update</button>
            </form>
          </td>';
        $html = $html . '<td><div class="order-detail-link">
                            <a href="orderdetails.php">Info</a>
                        </div></td></tr>';
    }
    // Eind van de "table"
    $html = $html . "</tbody></table>";

    // Geef de HTML terug
    return $html;
}
