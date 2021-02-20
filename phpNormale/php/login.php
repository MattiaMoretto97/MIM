<?php
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

$cipher="aes-256-cbc-hmac-sha256";
$passphrase = 'ciao';
$options = 0;
$ivlen = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivlen);

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$db = new PDO($dsn, $username, $password_a);
$query_select = "SELECT password FROM utenti WHERE email = '".$email."'";

$sth = $db->query($query_select);
while( $row = $sth->fetch(PDO::FETCH_ASSOC) ) {
  $password_db = $row; 
}

//print_r($password_db['password']);
$prova = $password_db['password'];

//print_r($prova);
//print_r($cipher);
//print_r($passphrase);
//print_r($options);
//print_r($iv);

$password_db_dcr = openssl_decrypt($prova, $cipher, $passphrase, $options, $iv);

print_r($password_db_dcr);


<<<<<<< HEAD
if ($password_db_dcr === $password) {
  
  $queryCheckUser = "SELECT * FROM utenti WHERE email = ? AND password = ?";
=======

$statement = mysqli_prepare($conn, $queryCheckUser);
>>>>>>> d2c7f742060e044ca2a0d45e3cf55bf676e71ac2

  $statement = mysqli_prepare($conn, $queryCheckUser);

  mysqli_stmt_bind_param($statement, "ss", $email, $password);

  mysqli_stmt_execute($statement);

  $result = mysqli_stmt_get_result($statement);

  $error = mysqli_stmt_error($statement);

  if ($error != null) {
    echo $error;
    die();
  }

<<<<<<< HEAD
  $count = mysqli_num_rows($result);

  if ($count == 0) {
    die("Utente non trovato");
  }

  $user = mysqli_fetch_assoc($result);

  session_start();
  $_SESSION['user'] = $user;

  header("Location: ../lettore/homeUtente.php");
}
=======
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
>>>>>>> d2c7f742060e044ca2a0d45e3cf55bf676e71ac2

?>