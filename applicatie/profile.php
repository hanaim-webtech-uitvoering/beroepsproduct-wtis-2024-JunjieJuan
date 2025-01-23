<?php
$pageTitel = 'profiel';
require_once 'components/header.php';

require_once 'includes/account/data_userinfo.php';
require_once 'includes/account/proces_data_userinfo.php';
require_once 'includes/account/view_userinfo.php';

$processedData = processUserData(getUserInfo());

require_once 'includes/account/data_orderhistory.php';
require_once 'includes/account/view_userorderhistory.php';

?>
<main>
    <div class="topmargen">
        <div class="profileContainer">
            <div class="profileInfoWrapper">
                <?= generateUserInfo($processedData) ?>
            </div>

            <div class="customersOrderWrapper">
                <?= generateUserOrderHistory(getUserOrderHistory()) ?>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'components/footer.php';
?>