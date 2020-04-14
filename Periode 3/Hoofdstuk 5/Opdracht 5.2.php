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
<h1>
    Uitschrijfformulier KW1C
</h1>
<hr>
<form action="uitschrijving.php" method="get">
    <table>
        <tr>
            <td>
                <label for="vaNaam">
                    Voor en achternaam
                </label>
            </td>
            <td>
                <input type="text" name="vaNaam">
            </td>
        </tr>
        <tr>
            <td>
                <label for="sNummer">
                    Studentennummer
                </label>
            </td>
            <td>
                <input type="text" name="sNummer"
            </td>
        </tr>
        <tr>
            <td>
                <label for="uDatum">
                    Datum van uitschrijving
                </label>
            </td>
            <td>
                <input type="text" name="uDatum">
            </td>
        </tr>
        <tr>
            <td>
                <label for="uReden">
                    Reden van uitschrijving
                </label>
            </td>
            <td>
                <select name="uReden">
                    <option>Verkeerde keuze</option>
                    <option>Andere opleiding gevonden</option>
                    <option>Stopt met leren</option>
                    <option>Te moeilijk</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="leerjaar">
                    Leerjaar
                </label>
            </td>
            <td>
                <input type="radio" name="leerjaar" value="1e leerjaar">1e leerjaar
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="leerjaar" value="2e leerjaar">2e leerjaar
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="leerjaar" value="3e leerjaar">3e leerjaar
            </td>
        </tr>
        <tr>
            <td>
                <label><input type="checkbox" name="succesklas"> Ik wil me aanmeldden bij de succesklas</label>
            </td>
        </tr>
        <tr>
            <td>
                <label><input type="checkbox" name="systeem"> Verwijder mijn gegevens uit het systeem</label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="uRedenLang">
                    Geef hieronder de reden van je uitschrijving op
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="uRedenLang">
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