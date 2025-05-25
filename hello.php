<?php
/**
 * Formaterar serverns aktuella tid enligt specifikt format
 * @return string - Formaterad tidsträng (ÅÅÅÅ-MM-DD TT:MM:SS)
 */
function formatServerTime() {
    // Använder date() med tidszon från php.ini-konfigurationen
    return date('Y-m-d H:i:s');
}

// Skriver ut hälsningsmeddelande med formaterad server-tid
echo "Hello från XAMPP! Server-tid: " . formatServerTime();
?>