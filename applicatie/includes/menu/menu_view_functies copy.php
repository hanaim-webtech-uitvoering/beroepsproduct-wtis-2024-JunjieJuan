<?php
require_once 'menu_data_functies.php'; // Zorg ervoor dat het juiste bestand is opgenomen
function generateMenuHTML($products)
{
    if (empty($products)) {
        return '<p>Geen menuitems beschikbaar.</p>';
    }

    $groupedProducts = [];
    foreach ($products as $product) {
        $groupedProducts[$product['id']][] = $product;
    }

    $html = '<div class="menu">';

    foreach ($groupedProducts as $categoryId => $categoryProducts) {
        $html .= '<div class="category">';
        $html .= '<h1>' . htmlspecialchars(getCategoryName($categoryId), ENT_QUOTES, 'UTF-8') . '</h1>'; // Categorie naam.

        $html .= '<div class="row">';
        foreach ($categoryProducts as $product) {
            $name = htmlspecialchars($product['name'] ?? '', ENT_QUOTES, 'UTF-8');
            $price = number_format((float)($product['price'] ?? 0), 2, ',', '.'); // Formatteer prijs.
            $ingredient = htmlspecialchars($product['ingredient'] ?? 'Geen ingrediënten', ENT_QUOTES, 'UTF-8');

            // // Splits de ingrediënten als ze meerdere items bevatten (gescheiden door komma's)
            // $ingredientList = explode(',', $ingredient);
            // $ingredients = '';
            // foreach ($ingredientList as $ingredientItem) {
            //     $ingredients .= '<li>' . htmlspecialchars(trim($ingredientItem), ENT_QUOTES, 'UTF-8') . '</li>';
            // }

            // Bouw de HTML voor elk product
            $html .= '<div class="column">';
            $html .= '<img src="images/' . strtolower(str_replace(' ', '_', $name)) . '.jpg" alt="' . $name . '" style="width:100%">';
            $html .= '<h3>' . $name . '</h3>';
            $html .= '<div class="ingredient"><ul>' . $ingredient . '</ul></div>';
            $html .= '<div class="placeholder">';
            $html .= '<div class="price"><p><b>€ ' . $price . '</b></p></div>';
            $html .= '<form method="post" action="includes/shoppingcart/add_cart.php">';
            $html .= '<input type="hidden" name="product_name" value="' . htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') . '">';
            $html .= '<input type="hidden" name="product_price" value="' . htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') . '">';
            $html .= '<input type="number" name="quantity" value="1" min="1" class="quantity-input">';
            $html .= '<button type="submit" name="add_to_cart" class="btn">Bestel nu</button>';
            $html .= '</form>';
            $html .= '</div>'; // Placeholder
            $html .= '</div>'; // Column
        }
        $html .= '</div>'; // Row
        $html .= '</div>'; // Category
    }

    $html .= '</div>'; // Menu

    return $html;
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
