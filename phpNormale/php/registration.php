<?php
include "autoload.php";

$cipher = env('cipher');
print_r($cipher);
$passphrase = env('passphrase');
$options = env('options');
$iv = env('iv');
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


$nome = $_REQUEST['nome'];
$cognome = $_REQUEST['cognome'];
$email = $_REQUEST['email'];
$password = openssl_encrypt($_REQUEST['password'], $cipher,$passphrase,$options,$iv);
$cf = $_REQUEST['cf'];
if ($_REQUEST["ruolo"] === "lettore"){
    $ruolo = 2;
}else {
    $ruolo = 3;
}

$queryInsertUtente = "
INSERT INTO utenti (
    nome,
    cognome,
    email,
    cf,
    password,
    idRuolo
) VALUES (
    '$nome',
    '$cognome',
    '$email',
    '$cf',
    '$password',
    '$ruolo'
);
";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
$error = mysqli_error($conn);
echo "Query Insert Utente error<br>";
echo $error . "<br>";
die();
}

header("Location: ../login.php");

?>