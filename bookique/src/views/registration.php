<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>bookique</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="asset/css/custom/mainregistrazione.css">
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
                    <form class="pulsanti-inserimento">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" placeholder="nome"><br>
                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="cognome"><br>
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" placeholder="password"><br>
                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="CF"><br>
                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="Email"><br>
                        <select class="tipologia">
                        <option value="lettore">lettore</option>
                        <option value="casaeditrice">casa editrice </option>
                        </select>
                    </form>
                    <form class="checkbox">
                        <section title="checkbox">
                        <input type="checkbox" value="None" id="squaredFour" name="check" />
                        <label for="squaredFour">Accetto i <a href="#">termini di condizione d'uso</a></label>
                        </section>
                    </form>
                    <div>
                        <button class="bottone-inferiore">registrati</button>
                    </div>
            </div>
            <div class="p-2 flex-fill bd-highlight">
                <figure class="ml-auto p-2">
                    <img class="img-responsive" src="asset/images/img.jpeg" alt="img-bookique">
                </figure>
          </div>
          <script  type="text/javascript" src="asset/js/jquery.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    </body>
</html>