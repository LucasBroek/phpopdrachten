<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 02/03/2020
 * Time: 12:33
 */
include "../../Includes/header.php";
include "../../Includes/nav.php";

$trafficLightColor = "groen";
$ambulanceComing = false;
$driveOn = true;

if ($trafficLightColor == "groen" && $ambulanceComing == false)
{
    $driveOn = true;
}
elseif ($trafficLightColor == "rood" || $trafficLightColor == "oranje" || $ambulanceComing == true)
{
    $driveOn = false;
}

if ($driveOn == true)
{
    echo "U mag doorrijden.<br>";
}
elseif ($driveOn == false)
{
    echo "U moet stoppen.<br>";
}

$countryName = "Bulgarije";
$currentAge = 17;

if ($countryName == "België")
{
    echo "Je woont in $countryName en bent $currentAge jaar oud.<br>";
    if ($currentAge < 16)
    {
        echo "Je mag hier geen alcohol drinken";
    }
    elseif ($currentAge >= 16 && $currentAge < 18)
    {
        echo "Je mag hier alleen zwakke alcohol drinken";
    }
    elseif ($currentAge >= 18)
    {
        echo "Je mag hier alle soorten drank drinken";
    }
}
elseif ($countryName == "Nederland" || $countryName == "Bulgarije")
{
    echo "Je woont in $countryName en bent $currentAge jaar oud.<br>";
    if ($currentAge < 18)
    {
        echo "Je mag hier geen alcohol drinken";
    }
    elseif ($currentAge >= 18)
    {
        echo "Je mag hier alle soorten drank drinken";
    }
}
elseif ($countryName == "Cyprus")
{
    echo "Je woont in $countryName en bent $currentAge jaar oud.<br>";
    if ($currentAge < 17)
    {
        echo "Je mag hier geen alcohol drinken";
    }
    elseif ($currentAge >= 17)
    {
        echo "Je mag hier alle soorten drank drinken";
    }
}
elseif ($countryName == "Zweden")
{
    echo "Je woont in $countryName en bent $currentAge jaar oud.<br>";
    if ($currentAge < 18)
    {
        echo "Je mag hier geen alcohol drinken";
    }
    elseif ($currentAge >= 18 && $currentAge < 20)
    {
        echo "Je mag hier alleen zwakke alcohol drinken";
    }
    elseif ($currentAge >= 20)
    {
        echo "Je mag hier alle soorten drank drinken";
    }
}


include "../../Includes/footer.php";