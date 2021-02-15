<?php
$servername = "localhost";
$dsn = 'mysql:dbname=bookique;host=127.0.0.1';
$username = "root";
$password = "";
$dbname = "bookique";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

session_start();

$user_id = 2;     //$_SESSION['user']['id'];
$book_id = 12;     //(int) $_GET['id'];

function ifRowExists($dsn, $username, $password, $user_id, $book_id)
{
  $result = "";
  $db = new PDO($dsn, $username, $password);
  $query_select = "
      SELECT * 
      FROM desiderati 
      WHERE idUtente = '".$user_id."' AND idLibro = '".$book_id."'
  ";

  print_r($query_select);

  $sth = $db->query($query_select);

  while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $result = $row;
  };

  print_r(empty($result));

  if (empty($result)) {
      return false; 
    } else {
      return true;
  }
}

if (ifRowExists($dsn, $username, $password, $user_id, $book_id)) {

  $db = new PDO($dsn, $username, $password);
  $query_insert = "
    DELETE FROM desiderati
    WHERE idUtente = '".$user_id."' AND idLibro = '".$book_id."';
    ";

  $db->query($query_insert);
}

mysqli_close($conn);

//header("Location: ../lettore/homeUtente.php");

?>