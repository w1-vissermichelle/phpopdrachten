<?php
/**
 * User: Michelle Visser
 * Date: 03-05-2020
 * Time: 12:35
 * File: opdracht61.php
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
<body>
    <form method="post" action="checklogin.php";>
        <p>
            Gebruikersnaam
        </p>
        <input name="username" type="text">
        <p>
            Wachtwoord
        </p>
        <input name="password" type="password">
        <input type="submit" name="submit">
    </form>
    <?php
        include "footer.php";
    ?>
</body>
</html>