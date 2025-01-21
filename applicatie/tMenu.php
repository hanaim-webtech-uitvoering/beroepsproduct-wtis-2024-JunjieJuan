<?php
$pageTitel = 'Menu';
require_once 'components/header.php';

// require_once'./includes/menu/menu_data_functies.php';
// require_once'./includes/menu/menu_view_functies.php';
?>

<main>
    <section class="topmargen">
        <div class="menu">

            <div class="pizza">
                <h1>Pizza</h1>
                <div class="row">
                    <div class="column">
                        <img src="images/pizza/margherita.jpg" alt="margherita" style="width:100%">
                        <h3>Margherita</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella, verse spinazie, verse tomaat, pizzakruiden & een swirl van
                                pesto. Allergenen: Gluten, Melk, Noten
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€9.99</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/pepperoni.jpg" alt="Pepperoni" style="width:100%">
                        <h3>Pepperoni</h3>
                        <div class="ingredient">
                            <p>
                                
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€ 11.99</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>

                    <div class="column">
                        <img src="images/pizza/vegatarische.jpg" alt="Vegetarische" style="width:100%">
                        <h3>Vegetarische</h3>
                        <div class="ingredient">
                            <p>
                                
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€10.99</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="maaltijd">
                <h1>Combinatie maaltijd</h1>
                <div class="row">
                    <div class="column">
                        <img src="images/maaltijd/combi.jpg" alt="combi" style="width:100%">
                        <h3>Combinatie maaltijd</h3>
                        <div class="ingredient">
                            <p>
                            Tomaat, Kaas, Pepperoni, Champignon, Ui, Sla, Spek, Saus
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€15.99</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="voorgerecht">
                <h1>Voorgerecht</h1>
                <div class="row">
                    <div class="column">
                        <img src="images/voorgerecht/Knoflookbrood.jpg" alt="Knoflookbrood" style="width:100%">
                        <h3>Knoflookbrood</h3>
                        <div class="ingredient">
                            <p>
                                Tomatensaus, mozzarella & salami. Allergenen: Gluten, Melk
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€4.99</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="drank">
                <h1>Drank</h1>
                <div class="row">
                    <div class="column">
                        <img src="images/drank/cola.jpg" alt="cola" style="width:100%">
                        <h3>Coca Cola</h3>
                        <div class="ingredient">
                            <p>
                                
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€2.49</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>
                    <div class="column">
                        <img src="images/drank/sprite.jpg" alt="sprite" style="width:100%">
                        <h3>Sprite</h3>
                        <div class="ingredient">
                            <p>
                                
                            </p>
                        </div>
                        <div class="placeholder">
                            <div class="price">
                                <p>
                                    <b>€2.49</b>
                                </p>
                            </div>
                            <button type="button" class="btn">Bestel nu</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
<?php
require_once 'components/footer.php';
?>