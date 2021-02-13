<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Casa Editrice</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/custom/navbarCss.css">
    <link rel="stylesheet" href="asset/css/custom/searchBar.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg border border-dark " >
        <!-- Image and text -->
        <nav class="navbar">
            <div class="d-flex justify-content-start" id="NavBarLogo">
            <a class="navbar-brand" href="#">
                <img src="asset/images/logo.png" width="150" height="50" class="d-inline-block align-top" alt="">
            </a>
            </div>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="homecasaeditrice.php" style="color: black;">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="OperazioniCasaEditrice.php" style="color: black;">Operazioni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Libricasaeditrice.php" style="color: black;">Libri</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <a href="#" data-toggle="modal" data-target="#exampleModal">
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
            <option value="3">Casa Editrice</option>
            </select>
            <button type="submit" style="background-color: red;" class="searchButton border border-danger">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <!-- Aggiungi, Modifica o Elimina -->
    <div>
        <h2 style="margin: 50px;">Aggiungi, Modifica o Elimina</h2>
    </div>
    <div style="margin: 50px;">
		<strong>Aggiungi un libro qui:</strong>
        <form class="pulsanti-inserimento" action="../php/aggiungiLibri.php" method="post" enctype="multipart/form-data">
            <label for="lname"></label>
            <input type="text" id="titolo" name="titolo" placeholder="titolo">
            <label for="lname"></label>
            <input type="text" id="autore" name="autore" placeholder="autore">
            <label for="lname"></label>
            <input type="text" id="categoria" name="categoria" placeholder="categoria"> <br>
            <label for="lname"></label>
            <input type="text" id="tipologia" name="tipologia" placeholder="tipologia">
            <label for="lname"></label>
            <input type="text" id="isbn" name="isbn" placeholder="isbn">
            <label for="lname"></label>
            <input type="text" id="casaeditrice" name="casaeditrice" placeholder="casa editrice">
            <button type="submit">INVIA</button>  
        </form> 
    </div>                   
    <div class="search" style="margin: 50px; width: 250px;">
    <strong>Cerca il libro da eliminare:</strong> <br>
            <input type="text" class="searchTerm border border-danger" placeholder="Search here...">
            <button type="submit" style="background-color: red;" class="searchButton border border-danger">
            <i class="fa fa-search"></i>
            </button>
    </div>
    

    <!-- visibile o nascosto un libro -->
    <div>
        <h2 style="margin: 50px;">Scegli di rendere visibile o nascosto un libro</h2>
    </div>
    <div  style="width: 250px; margin:50px">
    <strong>Cerca il tuo libro:</strong><br>
    <div class="search">
            <input type="text" class="searchTerm border border-danger" placeholder="Search here...">
            <button type="submit" style="background-color: red;" class="searchButton border border-danger">
            <i class="fa fa-search"></i>
            </button>
        </div>
      <form action=".php" style="margin: 10px;">
		    <input type="checkbox" id="opzione1" name="opzione1" value="nascondi">
		    <label for="opzione1"> Nascondi questo libro</label><br>
        </form>
    </div>
     <!-- Footer -->
    <footer>
        <div class="text-center p-3" style="background-color: black; color:white; Margin:0px;">
            © 2021 Copyright:
            <a class="text-white" >Bookique</a>
        </div>
    </footer>
    <!--modal window cambiopassword-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title" style="text-align:center"> 
              <h3 class="titolo">cambia la password qui</h3>
         </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="inserimento">
            <input type="text" id="pname" name="lname" placeholder="password"><br>
            <label for="fname"></label>
            <input type="text" id="fname" name="fname" placeholder="nuova password"><br>
            <label for="lname"></label>
            <input type="text" id="lname" name="fname" placeholder="conferma password"><br>
            <label for="lname"></label>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="pulsantecambiopassword" class="btn btn-primary">INVIA</button>
        </div>
      </div>
    </div>
  </div>


  <script  type="text/javascript" src="asset/js/jquery.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    
</body>
</html>