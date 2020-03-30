<?php
/*************
 * Maak hier een functie genaamd "getTeacherName" die als return de juiste docent naam mee geeft.
 **************/

$firstName = $_POST["firstname"];
$tVoegsel = $_POST["tussenvoegsel"];
$lastName = $_POST["lastname"];
$vak = $_POST["subject"];


function getTeacherName($vak){
    //Zorg dat je hier de juiste docentnaam met een return terug stuurt.
    if($vak == "js")
    {
        $teacher = "M. van de Wetering";
    }
    elseif($vak == "php")
    {
        $teacher = "R. Evers";
    }
    return $teacher;
}
?>