<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>bookique</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom/mainregistrazione.css">
        <link rel="icon" href="images/logo.png">
    </head>
    <body>
    
        <div class="d-flex  bd-highlight">
            <div class="p-2 flex-fill bd-highlight">
                    <button class="bottone-superiore-dx">registrati</button>
                    <button class="bottone-superiore-sx">login</button><br/>
                    <section class="paragrafo">
                        <h1>Registrati</h1>
                        <p> ciao,<br/> inserisci le tue credenziali per registrarti </p>
                    </section>
                    <form class="pulsanti-inserimento" method="post" action="php/registration.php">
                        <label for="fname"></label>
                        <input type="text" id="nome" name="nome" placeholder="nome"><br>
                        <label for="lname"></label>
                        <input type="text" id="cognome" name="cognome" placeholder="cognome"><br>
                        <label for="fname"></label>
                        <input type="text" id="password" name="password" placeholder="password"><br>
                        <label for="lname"></label>
                        <input type="text" id="cf" name="cf" placeholder="CF"><br>
                        <label for="lname"></label>
                        <input type="text" id="email" name="email" placeholder="Email"><br>
                        <select class="tipologia" id="ruolo" name="ruolo">
                        <option value="lettore">lettore</option>
                        <option value="casaeditrice">casa editrice </option>
                        </select>
                    
                    <!-- <form class="checkbox">
                        <section title="checkbox">
                        <input type="checkbox" value="None" id="squaredFour" name="check" />
                        <label for="squaredFour">Accetto i <a href="#">termini di condizione d'uso</a></label>
                        </section>
                    </form> -->
                    
                    <div>
                        <button class="bottone-inferiore" type="submit" value="Submit" value="invia">registrati</button>
                    </div>
                    </form>
            </div>
            <div class="p-2 flex-fill bd-highlight">
                <figure class="ml-auto p-2">
                    <img class="img-responsive" src="img/img.jpeg" alt="img-bookique">
                </figure>
          </div>
          <script  type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>