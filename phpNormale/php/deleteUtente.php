<?php

$conn = mysqli_connect("localhost", "root", "");
        
$connectError = mysqli_connect_error($conn);

if ($connectError != null) {
    echo "Errore di connessione<br>";
    echo $connectError;
    die();
}

mysqli_select_db($conn, "bookique");

$error = mysqli_error($conn);

if ($error != null) {
    echo "Errore selezione Database <br>";
    echo $error;
    die();
}

$id = (int) $_GET['id'];

$queryInsertUtente = "
DELETE FROM letti WHERE idUtente = $id;";

$result = mysqli_query($conn, $queryInsertUtente);

$queryInsertUtente = "
DELETE FROM desiderati WHERE idUtente = $id;";

$result = mysqli_query($conn, $queryInsertUtente);

$queryInsertUtente = "
DELETE FROM utenti WHERE id = $id;";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
$error = mysqli_error($conn);
echo "Query Update Utente error<br>";
echo $error . "<br>";
die();
}

header("Location: ../superadmin/listaLettori.php");
?>