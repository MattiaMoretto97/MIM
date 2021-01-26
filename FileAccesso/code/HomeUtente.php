<?php
//session_start();

//if (!isset($_SESSION['user'])) {
  //header("Location: index.html");
  //die();
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Utente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbarCss.css">
    <link rel="stylesheet" href="css/searchBar.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border border-dark " >
        <!-- Image and text -->
        <nav class="navbar">
            <div class="d-flex justify-content-start" id="NavBarLogo">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="150" height="50" class="d-inline-block align-top" alt="">
            </a>
            </div>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="HomeUtente.php" style="color: black;">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: black;">Miei Libri</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle icon" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </a>
            <button type="button" class="btn">Logout</button>
        </div>
    </nav>

    <!-- Search Bar -->
    <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search here...">
            <select class="form-select" aria-label="Filtra ricerca">
            <option selected>Filtra Categoria</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Nuove Aggiunte -->
    <div>
        <h2>Ultime Aggiunte</h2>
    </div>
    
</body>
</html>