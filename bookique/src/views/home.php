<?php

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
    <div class="d-flex align-content-center flex-wrap SearchBar" style="width: 30%; margin:auto; margin-top:50px; margin-bottom:50px">
        <div class="search">
            <input type="text" class="searchTerm border border-danger" placeholder="Search here...">
            <select class="form-select border border-danger" aria-label="Filtra ricerca">
            <option selected>Tutto</option>
            <option value="1">Titolo</option>
            <option value="2">Autore</option>
            <option value="3">Casa Editrice</option>
            </select>
            <button type="submit" style="background-color: red;" class="searchButton border border-danger">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Nuove Aggiunte -->
    <div>
        <h2 style="margin: 50px;">Nuove Aggiunte</h2>
    </div>
    <div class="card border-dark" style="width: 18rem; margin:50px">
        <img class="card-img-top" src="img/libro.jpg" alt="Card image cap">
        <div class="card-body" style="margin: auto;">
        <h5 class="card-title" style="text-align: center;">Titolo</h5>
        <button type="button" class="btn" href="#">Vedi dettaglio</button>
    </div>
    </div>

    <!-- Più visti -->
    <div>
        <h2 style="margin: 50px;">Più visti</h2>
    </div>
    <div class="card border-dark" style="width: 18rem; margin:50px">
        <img class="card-img-top" src="img/libro.jpg" alt="Card image cap">
        <div class="card-body" style="margin: auto;">
        <h5 class="card-title" style="text-align: center;">Titolo</h5>
        <button type="button" class="btn" href="#">Vedi dettaglio</button>
    </div>
    </div>

    <!-- Più letti -->
    <div>
        <h2 style="margin: 50px;">Più letti</h2>
    </div>
    <div class="card border-dark" style="width: 18rem; margin:50px">
        <img class="card-img-top" src="img/libro.jpg" alt="Card image cap">
        <div class="card-body" style="margin: auto;">
        <h5 class="card-title" style="text-align: center;">Titolo</h5>
        <button type="button" class="btn" href="#">Vedi dettaglio</button>
    </div>
    </div>

    <!-- Lista libri -->
    <div>
        <h2 style="margin: 50px;">Lista libri</h2>
    </div>
    <div class="card border-dark" style="width: 18rem; margin:50px">
        <img class="card-img-top" src="img/libro.jpg" alt="Card image cap">
        <div class="card-body" style="margin: auto;">
        <h5 class="card-title" style="text-align: center;">Titolo</h5>
        <button type="button" class="btn" href="#">Vedi dettaglio</button>
    </div>
    </div>
    
     <!-- Footer -->
    <footer>
        <div class="text-center p-3" style="background-color: black; color:white">
            © 2021 Copyright:
            <a class="text-white" >Bookique</a>
        </div>
    </footer>
    
</body>
</html>
<html>
    <head><title></title>
        <link rel="stylesheet" href="maincambiopassword.css">
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="asset/css/custom/mainlogin.css">
    </head>
    <body>
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        clicca qui
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">conferma password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
            <input type="text" id="lname" name="lname" placeholder="password"><br>
            <label for="fname"></label>
            <input type="text" id="fname" name="fname" placeholder="nuova password"><br>
            <label for="lname"></label>
            <input type="text" id="fname" name="fname" placeholder="conferma password"><br>
            <label for="lname"></label>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">INVIA</button>
        </div>
      </div>
    </div>
  </div>
        <script  type="text/javascript" src="asset/js/jquery.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    </body>
</html>