<?php
$pageTitel = 'Order Details';
require_once 'components/header.php';
require_once 'includes/orderview/orderdetails/data_orderdetails.php';
require_once 'includes/orderview/orderdetails/view_orderdetails.php';
?>

<main>
    <div class="topmargen">
        <?php
        // Controleer of er een order_id in de URL zit
        if (isset($_GET['order_id'])) {
            $order_id = $_GET['order_id'];

            try {
                $orderDetails = getOrderDetails($order_id);

                echo generateOrderDetails($orderDetails);
            } catch (Exception $e) {
                echo '<p>Error: ' . $e->getMessage() . '</p>';
            }
        } else {
            echo '<p>Geen order_id opgegeven in de URL.</p>';
        }
        ?>
    </div>
</main>
<?php
require_once 'components/footer.php';
?>