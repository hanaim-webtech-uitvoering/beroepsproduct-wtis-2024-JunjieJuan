<?php

function generateFooter() {
    $footer = <<<HEAD
<footer class="footerContainer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="algemenevoorwaarden.html">Algemene voorwaarden</a></li>
                <li><a href="Privacyverklaring.html">privacy statement</a></li>
            </ul>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Designed by Junjie Juan 1637823</p>
        </div>
    </footer>
</body>

</html>
HEAD;
    return $footer;
}
?>