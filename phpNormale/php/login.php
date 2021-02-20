<?php

$conn = mysqli_connect("localhost", "root", "");

$connectError = mysqli_connect_error($conn);

if ($connectError != null) {
  echo "Errore di connessione!<br>";
  echo $connectError;
  die();
}

mysqli_select_db($conn, "bookique");

$error = mysqli_error($conn);

if ($error != null) {
  echo "Errore di selezione dataBase! <br>";
  echo $error;
  die();
}

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$queryCheckUser = "SELECT * FROM utenti WHERE email = ? AND password = ?";


$statement = mysqli_prepare($conn, $queryCheckUser);

mysqli_stmt_bind_param($statement, "ss", $email, $password);

mysqli_stmt_execute($statement);

$result = mysqli_stmt_get_result($statement);

$error = mysqli_stmt_error($statement);

if ($error != null) {
  echo $error;
  die();
}

$count = mysqli_num_rows($result);

print_r($count);

// if ($count == 0) {
//   die("Utente non trovato");
//   header("Location: login.php");
// }

// $user = mysqli_fetch_assoc($result);
// print_r($user);
// if ($user['idRuolo'] == 2) {

//   session_start();
//   $_SESSION['user'] = $user;
//   header("Location: ../lettore/homeUtente.php");

// } elseif ($user['idRuolo'] === 3) {

//   session_start();
//   $_SESSION['casaEditrice'] = $user;
//   header("Location: ../superadmin/homeUtente.php");
// } else {

//   session_start();
//   $_SESSION['superadmin'] = $user;
//   header("Location: ../superadmin/homeSuperadmin.php");
// }

?>