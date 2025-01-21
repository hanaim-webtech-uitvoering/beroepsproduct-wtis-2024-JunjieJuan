<?php
require_once 'menu_data_functies.php'; // Zorg ervoor dat het juiste bestand is opgenomen
function generateMenuHTML()
{
    $products = getMenuItems(); // Ophalen van de menu-items vanuit de database.

    // Controleer of producten beschikbaar zijn.
    if (empty($products)) {
        echo '<p>Geen menu-items beschikbaar.</p>';
        return;
    }

    // Start HTML-generatie.
    echo '<main>';
    echo '<section class="topmargen">';
    echo '<div class="menu">';

    // Groepeer producten per categorie (type_id).
    $groupedProducts = [];
    foreach ($products as $product) {
        $groupedProducts[$product['id']][] = $product;
    }

    // Itereer door de categorieën.
    foreach ($groupedProducts as $categoryId => $categoryProducts) {
        echo '<div class="category">';
        echo '<h1>' . htmlspecialchars(getCategoryName($categoryId), ENT_QUOTES, 'UTF-8') . '</h1>'; // Categorie naam.

        echo '<div class="row">';
        foreach ($categoryProducts as $product) {
            // Valideer en ontsnap de velden.
            $name = htmlspecialchars($product['name'] ?? '', ENT_QUOTES, 'UTF-8');
            $price = number_format((float)($product['price'] ?? 0), 2, ',', '.'); // Formatteer prijs.
            $ingredient = htmlspecialchars($product['ingredient'] ?? 'Geen ingrediënten', ENT_QUOTES, 'UTF-8');

            // Splits de ingrediënten als ze meerdere items bevatten (gescheiden door komma's)
            $ingredientList = explode(',', $ingredient);
            $ingredients = '';
            foreach ($ingredientList as $ingredientItem) {
                $ingredients .= '<li>' . htmlspecialchars(trim($ingredientItem), ENT_QUOTES, 'UTF-8') . '</li>';
            }

            // Weergeven van het product en de bijbehorende ingrediënten.
            echo '<div class="column">';
            echo '<img src="images/' . strtolower(str_replace(' ', '_', $name)) . '.jpg" alt="' . $name . '" style="width:100%">';
            echo '<h3>' . $name . '</h3>';
            echo '<div class="ingredient"><ul>' . $ingredients . '</ul></div>';
            echo '<div class="placeholder">';
            echo '<div class="price"><p><b>€ ' . $price . '</b></p></div>';
            echo '<form method="post" action="includes/shoppingcart/add_cart.php">';
            echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') . '">';
            echo '<input type="hidden" name="product_price" value="' . htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') . '">';
            echo '<input type="number" name="quantity" value="1" min="1" class="quantity-input">';
            echo '<button type="submit" name="add_to_cart" class="btn">Bestel nu</button>';
            echo '</form>';
            

            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</section>';
    echo '</main>';
}

// Functie om categorieënamen te bepalen (voorbeeldfunctie, afhankelijk van jouw implementatie).
function getCategoryName($typeId)
{
    $categories = [
        'Pizza' => 'Pizza',
        'Maaltijd' => 'Combinatie maaltijd',
        'Voorgerecht' => 'Voorgerecht',
        'Drank' => 'Drank'
    ];
    return $categories[$typeId] ?? 'Onbekend';
}
