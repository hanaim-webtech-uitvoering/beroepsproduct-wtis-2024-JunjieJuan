<?php
$pageTitel = 'Menu';
require_once 'components/header.php';
require_once './includes/menu/menu_data_functies.php';
require_once './includes/menu/menu_view_functies.php';
?>
<main>
    <section class="topmargen">
        <?= generateMenuHTML(getMenuItems());?>
    </section>';
</main>
<?php
require_once 'components/footer.php';
