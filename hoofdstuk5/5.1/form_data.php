<style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        font-family: sans-serif;
        padding: 2px;
    }
</style>
<table>
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
        <td>
            <?php
                echo $_GET["companyName"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
        <td>
            <?php
                echo $_GET["firstName"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
        <td>
            <?php
                echo $_GET["lastName"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoon:
        </td>
        <td>
            <?php
                echo $_GET["telephone"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <?php
                echo $_GET["email"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
        <td>
            <?php
                echo $_GET["message"];
            ?>
        </td>
    </tr>
</table>

