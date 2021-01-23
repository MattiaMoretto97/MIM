<?php
//Connessione al server
$conn = mysqli_connect($servername, $username, $password);
// Connessione fallita
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}
?>