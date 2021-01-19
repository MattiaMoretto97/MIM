<?php

$servername = "localhost";
$username = "root";
$password = "";
 
// Check connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE gestione_utenti";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>