<?php
// Startar session för potentiell användning längre ner
session_start();

// Läs in HTTP-metoden från SERVER superglobal
$method = $_SERVER['REQUEST_METHOD'];

// Hämta fullständig URI (inklusive query-sträng)
$uri = $_SERVER['REQUEST_URI'];

// Konvertera query-sträng till associativ array
parse_str($_SERVER['QUERY_STRING'], $query);

// Skriv ut grundläggande request-information
echo "<h1>Request Info</h1>";
echo "Metod: $method<br>";
echo "URI: $uri<br>";
echo "Query-parametrar: <pre>" . print_r($query, true) . "</pre>";

// Extra hantering för POST-requests
if ($method === 'POST') {
    // Läs rå POST-data (används för JSON/XML etc)
    $postData = file_get_contents('php://input');
    
    // Säkerhetsåtgärd: Sanera eventuell HTML-input
    $cleanData = htmlspecialchars($postData, ENT_QUOTES, 'UTF-8');
    
    echo "POST Data (sanerad): $cleanData";
}
?>