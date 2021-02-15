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

$user_id = $_SESSION['user']['id'];
$old_password = $_REQUEST['oldPassword'];
$new_password = $_REQUEST['newPassword'];


$db = new PDO($dsn, $username, $password);
$query_select = "
    SELECT password 
    FROM utenti 
    WHERE id = '".$user_id."'
"; 

$sth = $db->query($query_select);

while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
    $result = $row; 
  }

if ($result['password'] === $old_password) {
    $db = new PDO($dsn, $username, $password);
    $query_update = "
        UPDATE utenti 
        SET password = '".$new_password."' 
        WHERE id = '".$user_id."'
    ";
    $db->query($query_update);

}

mysqli_close($conn);

header("Location: ../lettore/homeUtente.php");

?>