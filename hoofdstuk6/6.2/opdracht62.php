<?php
/**
 * User: Michelle Visser
 * Date: 04-05-2020
 * Time: 20:21
 * File: opdracht62.php
 */
?>
<html>
    <head>
        <title>
            Steen, papier, schaar
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <form id="gameFrm" method="get" action="opdracht62.php">
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen"><img src="../images/steen.jpg"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier"><img src="../images/papier.jpg"></div>
            <div class="float"><input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar"><img src="../images/schaar.jpg"></div>
        </form>

    </body>
</html>