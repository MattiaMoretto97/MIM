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

$titolo = $_REQUEST['titolo'];
$autore = $_REQUEST['autore'];
$categoria = $_REQUEST['categoria'];
$tipologia = $_REQUEST['tipologia'];
$isbn = $_REQUEST['isbn'];
$casaEditrice = $_REQUEST['casaEditrice'];
$id = (int) $_GET['id'];


$queryInsertUtente = "
UPDATE libri SET titolo = '$titolo', autore='$autore', categoria='$categoria', tipologia='$tipologia', isbn='$isbn', casaEditrice = '$casaEditrice' WHERE id = $id;
";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
$error = mysqli_error($conn);
echo "Query Update Utente error<br>";
echo $error . "<br>";
die();
}

header("Location: ../superadmin/listaLibri.php");
?>