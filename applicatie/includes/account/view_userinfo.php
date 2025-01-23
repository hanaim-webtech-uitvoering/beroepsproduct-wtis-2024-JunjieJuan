<?php
function generateUserInfo($processedData)
{
    $html = '<form method="post" action="includes/account/update_profile.php">';
    $html .= '<h1>Mijn gegevens</h1>';
    $html .= '<div class="profile-form">';
    $html .= '<label for="name">Voornaam & Achternaam:</label>';
    $html .= '<div class="column">';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='first_name' value='{$processedData['first_name']}' minlength='2' maxlength='15'>";
    $html .= '</div>';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='last_name' value='{$processedData['last_name']}' minlength='2' maxlength='15'>";
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    $html .= '<div class="profile-form">';
    $html .= '<label for="name">Gebruikersnaam:</label>';
    $html .= '<div class="column">';
    $html .= $processedData['username'];
    $html .= '</div>';
    $html .= '</div>';

    $html .= '<h1>Mijn adres</h1>';
    $html .= '<div class="profile-form">';
    $html .= '<label for="adres">Straatnaam nr:</label>';
    $html .= '<div class="column">';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='address' value='{$processedData['streetName']}' placeholder='straat'>";
    $html .= '</div>';
    $html .= '<div class="form-control">';
    $html .= "<input type='number' name='Nummer' value='{$processedData['houseNumber']}' placeholder='nummer'>";
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    $html .= '<div class="profile-form">';
    $html .= '<label for="postal">Postcode & stad:</label>';
    $html .= '<div class="column">';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='postal' value='{$processedData['postalCode']}' placeholder='postcode'>";
    $html .= '</div>';
    $html .= '<div class="form-control">';
    $html .= "<input type='text' name='city' value='{$processedData['city']}' placeholder='stad'>";
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    $html .= '<button type="submit" name="submit" class="btn">Opslaan</button>';
    $html .= '</form>';

    return $html;
}
