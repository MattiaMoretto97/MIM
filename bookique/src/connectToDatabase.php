<?php
//Connessione al database
$db_selected= mysqli_select_db($conn, $dbname);
// Connessione fallita
if (!$db_selected){
    $sql = 'CREATE DATABASE bookique';
    mysqli_query($conn, $sql);
  
    if (mysqli_select_db($conn, $dbname)) {
        //echo "Database creato correttamente\n";
    } else {
        die ('Errore nella selezione del database: errore '.mysqli_error($conn));
    }
}
?>