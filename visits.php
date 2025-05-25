<?php
// Starta/återuppta session med standardinställningar
session_start();

// Initiera besöksräknare om den inte finns
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0; // Startvärde
    $_SESSION['first_visit'] = date('Y-m-d H:i:s'); // Spara första besökstid
}

// Öka räknaren vid varje besök
$_SESSION['visits']++;

// Hantera sessionstimeout (30 minuter)
$timeout = 1800; // 30 minuter i sekunder
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
    // Förstör session vid timeout
    session_unset();     // Rensa alla session-variabler
    session_destroy();   // Förstör sessionen
    session_start();     // Starta ny session
    $_SESSION['visits'] = 1; // Återställ räknare
}

// Uppdatera senaste aktivitetstiden
$_SESSION['last_activity'] = time();

// Visa besöksstatistik
echo "Antal besök: " . $_SESSION['visits'] . "<br>";
echo "Första besök: " . $_SESSION['first_visit'];
?>