<?php
$pageTitel = 'Order view';
require_once 'components/header.php';

if ($_SESSION["role"] !== "Personnel") {
    header("location: index.php?error=accessdenied");
    exit();
}

require_once 'includes/orderview/data_orderview.inc.php';
require_once 'includes/orderview/view_orderview.php';
?>
<main>
    <div class="topmargen">
        <div class="order-overview-container">
            <div class="order-overview-header">
                <h2>Order overview</h2>
            </div>
            <?= generateOrderView(getOrderView()) ?>
        </div>
    </div>
</main>

<?php
require_once 'components/footer.php';
?>