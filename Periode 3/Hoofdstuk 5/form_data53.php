<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 14/04/2020
 * Time: 14:38
 */
include "../../Includes/functions.php";
include "../../Includes/header.php";
include "../../Includes/nav.php";

$naam = $_POST["naam"];
$leeftijd = $_POST["leeftijd"];
$gemeente = $_POST["gemeente"];
$inwoners = $_POST["citizens"];
$kenInfected = $_POST["kenInfected"];
$aantalOpnames = $_POST["infected"];
$kans1Op = getKans1Op();
$vergelijking = vergelijkOorzaken($kans1Op);

?>
<h4>
    form_data53.php
</h4>
<table>
    <tr>
        <td>
            Vraag
        </td>
        <td>
            Antwoord
        </td>
    </tr>
    <tr>
        <td>
            Naam
        </td>
        <td>
            <?php
                echo $naam;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leeftijd
        </td>
        <td>
            <?php
                echo $leeftijd;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Gemeente
        </td>
        <td>
            <?php
                echo $gemeente;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Inwoners
        </td>
        <td>
            <?php
                echo $inwoners;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aantal opgenomen
        </td>
        <td>
            <?php
                echo $aantalOpnames;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Kennissen besmet
        </td>
        <td>
            <?php
                echo $kenInfected;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken.
        </td>
    </tr>
    <tr>
        <td>
            Kans per ontmoeting op besmetting
        </td>
        <td>
            <?php
                echoKans();
                echo "%";
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Kans is 1 op
        </td>
        <td>
            <?php
                echo $kans1Op;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php
                echo $vergelijking;
            ?>
        </td>
    </tr>
</table>

<?php
include "../../Includes/footer.php";