<?php
/**
 * User: Michelle Visser
 * Date: 03-05-2020
 * Time: 12:39
 * File: checklogin.php
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
    <?php
        $loggedIn = false;
        $authUsers = Array(
            "Abu" => "bekend",
            "Nordin" => "onbekend",
            "BasZ" => "654321",
            "Rosalie" => "bloemblaadjes"
        );
        if(isset($_POST['submit'])){
            foreach($login as $username => $password){
                if ($_POST['username'] == $username && $_POST['password'] == $password)
                {
                    session_start();
                    $_SESSION['username'] = $_POST['username'];
                    header('location: welkom.php');
                    $loggedIn = true;
                }

            }
            if($loggedIn == false)
            {
                $message = "Ongeldige username/wachtwoord";
                include "opdracht61.php";
                echo $message, "<br>";
                echo $_POST['username'], " probeer het nog eens.";

            }
        }
    ?>
    <?php
        include "footer.php";
    ?>
</body>
</html>