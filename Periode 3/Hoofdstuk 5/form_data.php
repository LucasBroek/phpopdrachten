<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 14/04/2020
 * Time: 13:05
 */
include "../../Includes/header.php";
include "../../Includes/nav.php";

$bNaam = $_GET["Bedrijfsnaam"];
$vNaam = $_GET["Voornaam"];
$aNaam = $_GET["Achternaam"];
$tel = $_GET["telNummer"];
$email = $_GET["mail"];
$message = $_GET["bericht"];

?>
<table class="tabel">
    <tr class="tabel">
        <td class="tabel">
            Bedrijfsnaam:
        </td>
        <td class="tabel">
            <?php
                echo $bNaam;
            ?>
        </td>
    </tr>
    <tr class="tabel">
        <td class="tabel">
            Voornaam:
        </td>
        <td class="tabel">
            <?php
                echo $vNaam;
            ?>
        </td>
    </tr>
    <tr class="tabel">
        <td class="tabel">
            Achternaam:
        </td>
        <td class="tabel">
            <?php
                echo $aNaam;
            ?>
        </td>
    </tr>
    <tr class="tabel">
        <td class="tabel">
            Telefoonnummer:
        </td>
        <td class="tabel">
            <?php
                echo $tel;
            ?>
        </td>
    </tr>
    <tr class="tabel">
        <td class="tabel">
            E-mail:
        </td>
        <td class="tabel">
            <?php
                echo $email;
            ?>
        </td>
    </tr>
    <tr class="tabel">
        <td class="tabel">
            Bericht:
        </td>
        <td class="tabel">
            <?php
                echo $message;
            ?>
        </td>
    </tr>
</table>

<?php
include "../../Includes/footer.php";