<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

// Itera attraverso gli hotel
foreach ($hotels as $hotel) {
    // Stampa il nome dell'hotel
    echo "Nome: " . $hotel['name'] . "<br>";

    // Stampa la descrizione dell'hotel
    echo "Descrizione: " . $hotel['description'] . "<br>";

    // Stampa se c'è parcheggio o meno
    echo "Parcheggio disponibile: " . ($hotel['parking'] ? 'Sì' : 'No') . "<br>";

    // Stampa il voto dell'hotel
    echo "Voto: " . $hotel['vote'] . "<br>";

    // Stampa la distanza dall centro
    echo "Distanza dal centro: " . $hotel['distance_to_center'] . " km<br>";

    // Aggiunge una linea orizzontale per separare gli hotel
    echo "<hr>";
}
