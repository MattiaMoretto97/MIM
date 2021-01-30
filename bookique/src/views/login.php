<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>bookique</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="asset/css/custom/mainlogin.css">
        <link rel="icon" href="asset/images/logo.png">
    </head>
    <body>
        <div class="d-flex  bd-highlight">
            <div class="p-2 flex-fill bd-highlight">
                    <button class="bottone-superiore-dx">REGISTRATI</button>
                    <button class="bottone-superiore-sx">LOGIN</button><br/>
                    <section class="paragrafo">
                        <h1>Log In</h1>
                        <p>bentornato <br/> Per favore, accedi al tuo account</p> <br/>
                    </section>
                    <form class="pulsanti-inserimento">
                        <label for="fname"></label>
                        <input type="text" id="fname" name="fname" placeholder="username"><br>
                        <label for="lname"></label>
                        <input type="text" id="lname" name="lname" placeholder="password"><br>                       
                    </form>
                    <form class="checkbox">
                        <section  class="checkbox" title="checkbox">
                        <input type="checkbox" value="None" id="squaredFour" name="check" />
                        <label for="squaredFour">Ricordami  <a href="#">Password dimenticata?</a></label> 
                        </section>
                    </form>
                    <div>
                        <button class="bottone-inferiore">ACCEDI</button>
                    </div>
            </div>
            <div class="p-2 flex-fill bd-highlight">
                    <figure class="ml-auto p-2">
                         <img class="img-responsive" src="asset/images/img.jpeg" alt="img-bookique">
                    </figure>
            </div>
        </div>
        
        <script  type="text/javascript" src="asset/js/jquery.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.js"></script>
    </body>
</html>