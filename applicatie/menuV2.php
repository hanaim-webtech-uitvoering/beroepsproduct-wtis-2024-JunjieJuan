<?php
$pageTitel = 'Menu';
require_once 'components/header.php';
require_once 'db_connectie.php';
echo generateHeader();

//1.Verbinding maken en gegevens ophalen
$db = maakVerbinding();
$query = 'select c.componistId as id, c.naam as naam, count(S.stuknr) as aantal
          from Componist C left outer join Stuk S on C.componistId = S.componistId
          group by C.componistId, C.naam
          order by naam';
$data = $db->query($query);

//2. Data renderen
$componisten_table = '<table>';
$componisten_table = $componisten_table . '<tr><th>Id</th><th>Naam</th><th>Aantal stukken</th></tr>';
foreach($data as $rij) {
  $id = $rij['id'];
  $naam = $rij['naam'];
  $aantal = $rij['aantal'];
  $componisten_table = $componisten_table . "<tr><td>$id</td><td>$naam</td><td>$aantal</td></tr>";
}
$componisten_table = $componisten_table . "</table>";
?>

<main>
    <section class="topmargen">
        <div class="pizza">
            <div class="populair">
                <h1>Populair</h1>
                <div class="row">
                    <div class="column">
                        <img src="images/pizza/caprese.jpg" alt="caprese" style="width:100%">
                        <h3>Caprese</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella, verse spinazie, verse tomaat, pizzakruiden & een swirl van
                                pesto. Allergenen: Gluten, Melk, Noten
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/four_cheese.jpg" alt="four cheese" style="width:100%">
                        <h3>Four cheese</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella, Gouda en cheddar kaasmix & Emmentaler. Allergenen: Gluten,
                                Melk
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/meatlover.jpg" alt="Meat lover" style="width:100%">
                        <h3>Pizza American Supreme Meatlover</h3>
                        <div class="ingredient">
                            <p>
                                BBQ saus, mozzarella, pepperoni, rundergehakt, kip kebab, bacon & ui. Allergenen:
                                Gluten, Melk
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="signature">
                <h1>Classieker</h1>
                <div class="row">
                    <div class="column">
                        <img src="images/pizza/salami.jpg" alt="salami" style="width:100%">
                        <h3>Pizza Salami</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella & salami. Allergenen: Gluten, Melk
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/tonno.jpg" alt="tonno" style="width:100%">
                        <h3>Pizza Tonno</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, tonijn, ui & extra mozzarella. Allergenen: Gluten, Melk, Vis
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/caprese.jpg" alt="Caprese" style="width:100%">
                        <h3>Caprese</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella, verse spinazie, verse tomaat, pizzakruiden & een swirl van
                                pesto. Allergenen: Gluten, Melk, Noten
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/four_cheese.jpg" alt="four cheese" style="width:100%">
                        <h3>Four cheese</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella, Gouda en cheddar kaasmix & Emmentaler. Allergenen: Gluten,
                                Melk
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/quattrostagioni.jpg" alt="quattro stagioni" style="width:100%">
                        <h3>Quattro Stagioni</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella, salami, ham, champignons & paprika. Allergenen: Gluten,
                                Melk
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 10.00</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                </div>
            </div>
            <!--
                <section class="meat">
                    <h3>Vlees</h3>
                </section>
                <section class="vegetarian">
                    <h3>Vegatarisch</h3>
                </section>
                <section class="fish">
                    <h3>Vis</h3>
                </section>
                <section class="vegan">
                    <h3>Vegan</h3>
                </section>
                -->
        </div>
    </section>
</main>
<?php
require_once 'components/footer.php';
echo generateFooter();
?>