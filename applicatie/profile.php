<?php
$pageTitel = 'profiel';
require_once 'components/header.php';

require_once 'includes/account/data_userinfo.php';
require_once 'includes/account/view_userinfo.php';
?>
<main>
    <div class="topmargen">
        <div class="profileContainer">
            <div class="profileInfoWrapper">
                <?= generateUserInfo(getUserInfo()) ?>
            </div>

            <div class="customersOrderWrapper">
                <table class="customer-order-history-table">
                    <thead>
                        <tr>
                            <th>Order Nr.</th>
                            <th>Datum</th>
                            <th>Status</th>
                            <th>Extra info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>27-11-2024</td>
                            <td>onderweg</td>
                            <td>
                                <div class="order-detail-link">
                                    <a href="orderdetails.html">Info</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
require_once 'components/footer.php';
?>