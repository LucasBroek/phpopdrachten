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
    opdracht54.php
</h2>
<h3>
    Stoplicht
</h3>
<form action="Opdracht 5.4.php" method="post">
    <table>
        <tr>
            <td>
                <label>Komt er een ambulance aan? <input type="radio" value="ja" name="ambulanceComing"> Ja <input type="radio" value="nee" name="ambulanceComing"> Nee </label>
            </td>
        </tr>
        <tr>
            <td>
                <label>Stoplicht kleur? <input type="radio" value="rood" name="trafficLightColor"> Rood <input type="radio" value="groen" name="trafficLightColor"> Groen <input type="radio" value="oranje" name="trafficLightColor"> Oranje</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="verzend" name="submit">
            </td>
        </tr>
    </table>
</form>
<?php
//de action is hetzelfde script als het formulier, eerst testen of het formulier
//verzonden is
if (isset($_POST['submit'])) {
    echo "<h3>Wat is de situatie en wat moet ik doen?</h3><div>";
    //Een van de of beide radiobuttons is/zijn niet aangevinkt
    if (!isset($_POST['trafficLightColor']) || !isset($_POST["ambulanceComing"])) {
        echo "<div>Of stoplichtkleur is onbekend of het is onbekend of de ambulance komt</div>";
    }
    else {
        $trafficLightColor = $_POST["trafficLightColor"];
        $ambulanceComing = $_POST["ambulanceComing"];

        echo "Stoplicht staat op $trafficLightColor en er komt: $ambulanceComing een ambulance aan.";

        //Bepalen of je wel of niet mag doorrijden
        if ($trafficLightColor <> "groen" || $ambulanceComing == 'ja') {
            echo "<div class='red'>U moet stoppen</div>";
        }
        else {
            echo "<div class='green'>U mag doorrijden</div>";
        }
 }
 echo "</div>";
 }

include "../../Includes/footer.php";