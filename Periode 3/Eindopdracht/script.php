<?php
/**
 * Created by PhpStorm.
 * User: LuBro
 * Date: 19/04/2020
 * Time: 16:49
 */
$loginData = array(
    "User42" => "Password42",
    "MrServer" => "Served8148",
    "RgbOverHex" => "fffSucks",
    "CSharpKing" => "CSharpSavedMe",
    "Error404" => "WallpaperNotFound",
    "WillBuyMicrosoft" => "ElonMusk2",
    "QuarantineCodes" => "CoronaForProgramming",
    "PresidentJavascript" => "StillTheBestLanguage",
    "WritesHTMLCodeByHand" => "LiterallyTheDevil",
    "InlineCss821" => "FightMeOverIt"
);
$message = "";
$username = $_POST["username"];
$password = $_POST["password"];
$combinationFound = false;

if(isset($_POST["submit"])) {
    foreach ($loginData as $uNameKnown => $pWordKnown) {
        if ($username == $uNameKnown && $password == $pWordKnown) {
            $combinationFound = true;
            ?>
    <h1>
        Bergheen
    </h1>
    <p>
        Welkom!
    </p>
    <fieldset>
        <legend>
            Openingstijden
        </legend>
        <table>
            <tr>
                <td>
                    Do: 22:00
                </td>
            </tr>
            <tr>
                <td>
                    Vr: All day
                </td>
            </tr>
            <tr>
                <td>
                    Za: All day
                </td>
            </tr>
            <tr>
                <td>
                    Zo: 12:00
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>
            Adresgegevens
        </legend>
        <table>
            <tr>
                <td>
                    Am Wriezener Bahnhof
                </td>
            </tr>
            <tr>
                <td>
                    10243 Berlin
                </td>
            </tr>
            <tr>
                <td>
                    Duitsland
                </td>
            </tr>
        </table>
    </fieldset>
    <p>
        Deze gegevens dien je ten alle tijden geheim te houden!
    </p>
            <?php
        }
        elseif($username == "" || $password = "") {
            if($combinationFound == false) {
                $message = "Gebruikersnaam of wachtwoord is leeg.";
            }
        }
        elseif ($username != $uNameKnown || $password != $pWordKnown && $combinationFound == false) {
            if($combinationFound == false) {
                $message = "Gebruikersnaam of wachtwoord onjuist.";
            }
        }
        elseif ($combinationFound == false) {
            if($combinationFound == false) {
                $message = "Onbekende error.";
            }
        }
    }
}