<?php
$conn = mysqli_connect("localhost", "my_keyfarm", "");

$connectError = mysqli_connect_error($conn);

if ($connectError != null) {
  echo "Errore di connessione<br>";
  echo $connectError;
  die();
}

mysqli_select_db($conn, "my_keyfarm");

$error = mysqli_error($conn);

if ($error != null) {
  echo "Errore selezione Database <br>";
  echo $error;
  die();
}

$nome = $_REQUEST['nome_utente'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$indirizzo = $_REQUEST['indirizzo'];
$sensori = $REQUEST['sensori'];

$queryInsertUtente = "
  INSERT INTO utenti (
    nome_utente,
    email,
    password,
    indirizzo,
    sensori
  ) VALUES (
    '$nome',
    '$email',
    '$password',
    '$indirizzo',
    '$sensori'
  );
";

$result = mysqli_query($conn, $queryInsertUtente);

if ($result == false) {
  $error = mysqli_error($conn);
  echo "Query Insert Utente error<br>";
  echo $error . "<br>";
  die();
}

header("Location: login_register.php");
?>