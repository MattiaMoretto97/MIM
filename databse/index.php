<?php 
include('include/config.php');
include('createDatabase.php');
include('createTables.php');
 ?>
<html>
    <head>
        <title>Bookique</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <?php include('templates/header.php'); ?>
        <?php include('templates/menu.php'); ?>

        <h1>Libri</h1>
        <p>Tanti bei libri</p>

        <?php include('templates/footer.php'); ?>
    </body>
</html>