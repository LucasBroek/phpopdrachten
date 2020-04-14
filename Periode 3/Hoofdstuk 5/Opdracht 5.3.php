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
<h2>
    opdracht53.php
</h2>
<h3>
    Taak 1
</h3>
<h4>
    Corona enquete:
</h4>
<hr>
<form action="form_data53.php" method="post">
    <table>
        <tr>
            <td>
                <label for="naam">Wat is je naam:</label>
            </td>
            <td>
                <input type="text" name="naam">
            </td>
        </tr>
        <tr>
            <td>
                <label for="leeftijd">Wat is je leeftijd:</label>
            </td>
            <td>
                <input type="text" name="leeftijd">
            </td>
        </tr>
        <tr>
            <td>
                <label for="gemeente">Gemeente:</label>
            </td>
            <td>
                <select name="gemeente">
                    <option>Den Bosch</option>
                    <option>Best</option>
                    <option>Eindhoven</option>
                    <option>Woensel</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="citizens">Aantal inwoners gemeente:</label>
            </td>
            <td>
                <input type="text" name="citizens">
            </td>
        </tr>
        <tr>
            <td>
                <label>Ken je mensen die besmet zijn in je woonplaats? <input type="radio" name="kenInfected" value="Ja"> Ja <input type="radio" name="kenInfected" value="Nee"> Nee</label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Aantal ziekenhuis opnames in je gemeente?* <input type="text" name="infected"></label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="verzend">
            </td>
        </tr>
        <tr>
            <td>
                * Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-covid-19/actueel" target="_blank">site RIVM</a>
            </td>
        </tr>
    </table>
</form>


<?php
include "../../Includes/footer.php";