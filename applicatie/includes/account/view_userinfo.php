<?php
function generateUserInfo($data)
{
    // Gebruik de juiste index van de array
    $username = isset($data[0]['username']) ? $data[0]['username'] : 'Onbekend';
    $first_name = isset($data[0]['first_name']) ? $data[0]['first_name'] : 'Onbekend';
    $last_name = isset($data[0]['last_name']) ? $data[0]['last_name'] : 'Onbekend';

    // Check of het adres niet null is
    $address = isset($data[0]['address']) ? $data[0]['address'] : null;

    if (!empty($address)) {
        $parts = explode(' ', $address);

        // Haal de stad en postcode eruit
        $city = array_pop($parts);
        $postalCode = array_pop($parts);
        $houseNumber = array_pop($parts);
        $streetName = implode(' ', $parts);
    } else {
        // Zet alles op null als er geen adres is
        $city = $postalCode = $houseNumber = $streetName = null;
    }

    // Begin HTML-formulier
    $html = '<form method="post" action="includes/account/update_profile.php">';
    $html .= '<h1>Mijn gegevens</h1>';
    $html .= '<div class="profile-form">';
    $html .= '<label for="name">Voornaam & Achternaam:</label>';
    $html .= '<div class="column">';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='first_name' placeholder='$first_name' minlength='2' maxlength='15'>";
    $html .= '</div>';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='last_name' placeholder='$last_name' minlength='2' maxlength='15'>";
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    // Gebruikersnaam tonen (niet aanpasbaar)
    $html .= '<div class="profile-form">';
    $html .= '<label for="name">Gebruikersnaam:</label>';
    $html .= '<div class="column">';
    $html .= $username;
    $html .= '</div>';
    $html .= '</div>';

    // Adres gegevens
    $html .= '<h1>Mijn adres</h1>';
    $html .= '<div class="profile-form">';
    $html .= '<label for="adres">Straatnaam nr:</label>';
    $html .= '<div class="column">';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='address' placeholder='$streetName' required>";
    $html .= '</div>';
    $html .= '<div class="form-control">';
    $html .= "<input type='number' name='Nummer' placeholder='$houseNumber' required>";
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    // Postcode en Stad
    $html .= '<div class="profile-form">';
    $html .= '<label for="postal">Postcode & stad:</label>';
    $html .= '<div class="column">';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='postal' placeholder='$postalCode' required>";
    $html .= '</div>';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='city' placeholder='$city' required>";
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    // Submit knop
    $html .= '<button type="submit" name="submit" class="btn">Opslaan</button>';

    $html .= '</form>';

    return $html;
}
