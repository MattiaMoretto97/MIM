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

$user_id = $_SESSION['id'];
$old_password = $_REQUEST['oldPassword'];
$new_password = $_REQUEST['newPassword'];

$db = new PDO($dsn, $username, $password);
$query_select = "
    SELECT password 
    FROM utenti 
    WHERE id = '".$user_id."'
"; 

$result = $db->query($query_select);

if ($result === $old_password) {
    $db = new PDO($dsn, $username, $password);
    $query_update = "
        UPDATE utenti 
        SET password = '".$new_password."' 
        WHERE id = '".$user_id."'
    ";
    $db->query($query_update);

}

mysqli_close($conn);

?>