<?php
// Sostituisci con le tue credenziali effettive del database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sito_personale";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>