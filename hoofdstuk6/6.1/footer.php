<?php
/**
 * User: Michelle Visser
 * Date: 03-05-2020
 * Time: 12:31
 * File: footer.php
 */
?>
<html>
<head>
    <title>

    </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
    footer{
        position: absolute;
        text-align: center;
        bottom: 0;
        margin: 5px;
    }
</style>
<body id="footer">
    <footer>
        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            $bezoeker = $_SESSION['username']. "&nbsp;<a
            href='/phpopdrachten2/hoofdstuk6/6.1/loguit.php'>Loguit</a>";
        }
        else {
            $bezoeker = "Onbekende bezoeker". "&nbsp;<a
            href='/phpopdrachten2/hoofdstuk6/6.1/opdracht61.php'>Login</a>";
        }
        echo $bezoeker;
        ?>
    </footer>
</body>
</html>