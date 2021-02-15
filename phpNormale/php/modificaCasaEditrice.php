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

$cognome = $_REQUEST['cognome'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$id = (int) $_GET['id'];


$queryInsertUtente = "
UPDATE utenti SET  nome = '', cognome = '$cognome' , email = '$email' , cf = '', password = '$password'  WHERE id = $id;
";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
$error = mysqli_error($conn);
echo "Query Update Utente error<br>";
echo $error . "<br>";
die();
}

header("Location: ../superadmin/listaCaseEditrici.php");
?>