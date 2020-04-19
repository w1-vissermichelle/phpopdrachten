<?php
/**
 * User: Michelle Visser
 * Date: 01-04-2020
 * Time: 16:40
 * File: opdracht5.2.php
 */
?>
<html>
    <head>
        <title>
            Uitschrijven KW1C
        </title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <style>
        textarea{
            resize: none;
            width: 400px;
            height: 100px;
        }
    </style>
    <body>
        <h1>
            Uitschrijfformulier KW1C
        </h1>
        <hr>
        <form action="form_data.php" method="get">
            <table>
                <tr>
                    <td>
                        Voor en achternaam
                    </td>
                    <td>
                        <input type="text" name="nameStudent">
                    </td>
                </tr>
                <tr>
                    <td>
                        Studentennummer
                    </td>
                    <td>
                        <input type="text" name="numberStudent">
                    </td>
                </tr>
                <tr>
                    <td>
                        Datum van uitschrijving
                    </td>
                    <td>
                        <input type="date" name="dateStopping"
                    </td>
                </tr>
                <tr>
                    <td>
                        Reden van uitschijving
                    </td>
                    <td>
                        <select name="reasonStopping">
                            <option value="wrongChoice">Verkeerde keuze</option>
                            <option value="boringTeachers">Saaie docenten</option>
                            <option value="moving">Verhuizing</option>
                            <option value="badSchool">Slechte school</option>
                            <option value="longTravel">Te ver reizen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Leerjaar
                    </td>
                    <td>
                        <input type="radio" name="schoolYear" value="yearOne">
                        <label for="one">1e leerjaar</label><br>
                        <input type="radio" name="schoolYear" value="yearTwo">
                        <label for="two">2e leerjaar</label><br>
                        <input type="radio" name="schoolYear" value="yearThree">
                        <label for="three">3e leerjaar</label>
                    </td>
                </tr>
            </table>
            <input type="checkbox" name="succesklas">
            <label>Ik wil me aanmelden bij de succesklas</label><br>
            <input type="checkbox" name="eraseData">
            <label>Verwijder mijn gegevens uit het systeem</label><br>
            <label>Geef hieronder de reden van je uitschrijving op</label><br>
            <textarea name="reasonStoppingFree"></textarea><br><br>
            <input type="submit" value="Versturen">
        </form>
    </body>
</html>