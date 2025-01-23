<?php
function processUserData($data)
{
    $processedData = [
        'username' => $data[0]['username'] ?? 'Onbekend',
        'first_name' => $data[0]['first_name'] ?? '',
        'last_name' => $data[0]['last_name'] ?? '',
        'streetName' => null,
        'houseNumber' => null,
        'postalCode' => null,
        'city' => null,
    ];

    if (!empty($data[0]['address'])) {
        $parts = explode(' ', $data[0]['address']);
        $processedData['city'] = array_pop($parts);
        $processedData['postalCode'] = array_pop($parts);
        $processedData['houseNumber'] = array_pop($parts);
        $processedData['streetName'] = implode(' ', $parts);
    }

    return $processedData;
}