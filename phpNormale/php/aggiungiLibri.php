<?php 
include "connection.php";

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
$casaEitrice = $_REQUEST['casaeditrice'];

$queryInsertUtente = "
INSERT INTO libri (
    titolo,
    autore,
    categoria,
    tipologia,
    isbn,
    casaEditrice,
    nascondi
) VALUES (
    '$titolo',
    '$autore',
    '$tipologia',
    '$isbn',
    '$casaEditrice',
    '1'
);
";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
$error = mysqli_error($conn);
echo "Query Insert Utente error<br>";
echo $error . "<br>";
die();
}

header("Location:../phpNormale/casaEditrice/homecasaeditrice.php");
?>