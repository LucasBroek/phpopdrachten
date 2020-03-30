<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.

include "lesopdracht_functions53.php";
?>
<table>
    <tr>
        <td>Voornaam</td>
        <td>
            <?php
            if(!empty($firstName))
            {
                echo $firstName;
            }
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td>
            <?php
                if(!empty($tVoegsel))
                {
                    echo $tVoegsel;
                }
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>
            <?php
            if(!empty($lastName))
            {
                echo $lastName;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>
            <?php
                echo getTeacherName($vak);
            ?>
        </td>
    </tr>
</table>