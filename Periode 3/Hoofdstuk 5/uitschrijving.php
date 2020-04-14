<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 14/04/2020
 * Time: 14:03
 */
include "../../Includes/header.php";
include "../../Includes/nav.php";

$voorAchterNaam = $_GET["vaNaam"];
$studentNummer = $_GET["sNummer"];
$uitschrijfDatum = $_GET["uDatum"];
$uitschrijfReden = $_GET["uReden"];
$lJaar = $_GET["leerjaar"];
$uitschrijfRedenLang = $_GET["uRedenLang"];

?>
<h1>
    Uitschrijfformulier KW1C
</h1>
<hr>
<table>
    <tr>
        <td>
            Voor en achternaam
        </td>
        <td>
            <?php
                echo $voorAchterNaam;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Studentennummer
        </td>
        <td>
            <?php
                echo $studentNummer;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Datum van uitschrijving
        </td>
        <td>
            <?php
                echo $uitschrijfDatum;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van uitschrijving
        </td>
        <td>
            <?php
                echo $uitschrijfReden;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Leerjaar
        </td>
        <td>
            <?php
                echo $lJaar
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aanmeldden bij de succesklas:
        </td>
        <td>
            <?php
                if(isset($_GET["succesklas"]))
                {
                    echo "JA";
                }
                else
                {
                    echo "NEE";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Verwijderen gegevens:
        </td>
        <td>
            <?php
                if(isset($_GET["systeem"]))
                {
                    echo "JA";
                }
                else
                {
                    echo "NEE";
                }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden van uitschrijving:<br>
        </td>
        <td>
            <?php
                echo $uitschrijfRedenLang;
            ?>
        </td>
    </tr>
</table>