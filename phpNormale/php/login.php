<?php
include "autoload.php";

$cipher = env('cipher');
$passphrase = env('passphrase');
$options = env('options');
$iv = env('iv');

$servername = "localhost";
$dsn = 'mysql:dbname=bookique;host=127.0.0.1';
$username = "root";
$password_a = "";
$dbname = "bookique";

// Create connection
$conn = mysqli_connect($servername, $username, $password_a, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $_REQUEST['email'];
$password = openssl_encrypt($_REQUEST['password'], $cipher,$passphrase,$options,$iv);

$queryCheckUser = "SELECT * FROM utenti WHERE email = ? AND password = ?";


$statement = mysqli_prepare($conn, $queryCheckUser);

$statement = mysqli_prepare($conn, $queryCheckUser);

mysqli_stmt_bind_param($statement, "ss", $email, $password);

mysqli_stmt_execute($statement);

$result = mysqli_stmt_get_result($statement);

$error = mysqli_stmt_error($statement);

if ($error != null) {
  echo $error;
  die();
}

$user = mysqli_fetch_assoc($result);
if ($user['idRuolo'] == 2) {

  session_start();
  $_SESSION['user'] = $user;
  header("Location: ../lettore/homeUtente.php");

} elseif ($user['idRuolo'] === 3) {

  session_start();
  $_SESSION['casaEditrice'] = $user;
  header("Location: ../superadmin/homeUtente.php");
} else {

  session_start();
  $_SESSION['superadmin'] = $user;
  header("Location: ../superadmin/homeSuperadmin.php");
}
