<?php
session_start();
if (!empty($_SESSION)) {
    session_unset(); // Rimuove tutte le variabili di sessione
    session_destroy(); // Distrugge la sessione
    // header("Location: ../index.html"); // Reindirizza alla pagina di login
}
