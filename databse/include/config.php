<?php
//Connessione al Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookique";

// Stabilisco connessione
$conn = mysqli_connect($servername, $username, $password);
// Connessione fallita
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}












?>