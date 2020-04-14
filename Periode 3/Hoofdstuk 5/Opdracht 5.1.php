<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 02/03/2020
 * Time: 12:33
 */
include "../../Includes/header.php";
include "../../Includes/nav.php";
?>
<form action="form_data.php" method="get">
    <table>
        <tr>
            <td>Restaria Kees Kroket</td>
        </tr>
        <tr>
            <td>
                Visstraat 12
            </td>
        </tr>
        <tr>
            <td>
                5211 DN 's-Hertogenbosch
            </td>
        </tr>
        <tr>
            <td>
                073 613 6720
            </td>
        </tr>
        <tr>
            <td>
                info@restariakeeskroket.nl
            </td>
        </tr>
        <tr>
            <td>
                <label for="Bedrijfsnaam">
                    Bedrijfsnaam
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Bedrijfsnaam">
            </td>
        </tr>
        <tr>
            <td>
                <label for="Voornaam">
                    Voornaam
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Voornaam">
            </td>
        </tr>
        <tr>
            <td>
                <label for="Achternaam">
                    Achternaam
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="Achternaam">
            </td>
        </tr>
        <tr>
            <td>
                <label for="telNummer">
                    Telefoon
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="telNummer">
            </td>
        </tr>
        <tr>
            <td>
                <label for="mail">
                    E-mail
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="mail">
            </td>
        </tr>
        <tr>
            <td>
                <label for="bericht">
                    Bericht
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="bericht">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
</form>

<?php
include "../../Includes/footer.php";
