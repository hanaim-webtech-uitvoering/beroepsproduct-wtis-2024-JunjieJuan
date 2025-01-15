<?php
$pageTitel = 'Pizzeria Sole Machina';
require_once 'components/header.php';
echo generateHeader();

$FrontPageTexst = <<<EOD
Een heerlijke maaltijd afhalen en thuis opeten, een avondje uit en een hapje eten bij ons in
het restaurant of helemaal de deur niet uit en uw maaltijd door ons laten bezorgen? Alles is
mogelijk! Onze maaltijden worden met zorg bereid en gemaakt met verse ingrediënten. Wij
staan altijd open voor verbetering en vinden het fijn om te horen als u lekker heeft gegeten, dus
laat gerust een review achter! Heeft u overige vragen? Neem contact met ons op via het formulier
op de contactpagina of bel ons even op. Wij hopen u snel te zien bij Pizzeria Sole Machina.
EOD;
?>
<main>
    <div class="topmargen">
        <section class="inleiding">
            <div>
                <h2>De italiaan van HAN</h2>
                <div>
                    <p><?= $FrontPageTexst ?></p>
                </div>
            </div>
        </section>

        <section class="frontpage1-section">
            <div class="hp">
                <h4>Hi Pizzalover!</h4>
                <div class="zip">
                    <h1>GEBRUIK NU EEN VAN DE ACTIES!!!</h1>
                    <div class="frontpage-banner">
                        <a href="login.html"><img class="deal" src="images/pizzaDeal.png" alt="deal"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="frontpage2-section">
            <div>
                <h1>New! De beste pizza's uit HAN</h1>
                <div class="frontVideo">
                    <video width="100%" height="100%" autoplay loop muted>
                        <source src="videos/FP_pizza.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
require_once 'components/footer.php';
echo generateFooter();
?>