<?php
/**
 * User: Michelle Visser
 * Date: 19-02-2020
 * Time: 21:05
 * File: script.php
 */
?>
<?php
?>
<html>
    <head>
        <title>
            Underground Discotheek Bergheen
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
    <?php
        $showLoginScreen = true;
        $message = "";
        $loggedIn = false;
        $login = array(
            "thelegend27" => "banaan",
            "hipsterkiller09" => "beanie",
            "beaucadeau" => "Cycl0p$",
            "vaasmontenegro" => "sombrero",
            "dancemonkey" => "annoyingsong",
            "policeman567" => "handsup",
            "madonna" => "britneybitch",
            "therealherobrine" => "steve",
            "tomnook" => "isabelle",
            "flowerpower420" => "coachella",
            "" => ""
        );

        if(isset($_POST['submit'])){
            foreach($login as $username => $password){
                if ($_POST['username'] == $username && $_POST['password'] == $password)
                {
                    $showLoginScreen = false;
                    $loggedIn = true;
                }
            }
            if($loggedIn == false)
            {
                $message = "Foutieve username en/of wachtwoord";
            }
        }
    ?>
    </body>
</html>