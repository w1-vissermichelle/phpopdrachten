<?php
/**
 * User: Michelle Visser
 * Date: 19-04-2020
 * Time: 20:56
 * File: login.php
 */
?>
<?php
include 'script.php';
?>
<html>
    <head>
        <title>
            Underground Discotheek Bergheen
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link
    </head>
    <style>
        fieldset{
            width: 200px;
            display: inline;
        }
    </style>
    <body>
        <h1>
            Bergheen
        </h1>
        <?php

        if($showLoginScreen == true)
        {
        ?>
        <panel>
            <p>
                Log in om onze adresgegevens + openingstijden te zien
            </p>
            <p>
                <?php
                    echo $message;
                ?>
            </p>
            <form method="post" action="login.php">
                <table>
                    <tr>
                        <td>
                            username:
                        </td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            password:
                        </td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </panel>
        <?php
        }
        else
        {
        ?>
        <panel>
            <p>
                Welkom!
            </p>
            <fieldset>
                <legend>Openingstijden</legend>
                <p>
                    Do: 22:00<br>
                    Vr: All day<br>
                    Za: All day<br>
                    Zo: 12:00
                </p>
            </fieldset>
            <fieldset>
                <legend>Adresgegevens</legend>
                <p>
                    Am Wrienzener Bahnhof<br>
                    10243 Berlin<br>
                    Duitsland
                </p>
            </fieldset>
            <p>
                Deze gegevens dien je ten alle tijden geheim te houden!
            </p>
        </panel>
        <?php
        }
        ?>
    </body>
</html>