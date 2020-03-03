<?php
include "../../Includes/header.php";
include "../../Includes/nav.php";

$event = "Elfstedentocht";
$translation = "Alvestêdetocht";
$distance = 200;
$toDo = "schaatstocht";
$terrain = "natuurijs";
$organiser = "Koninklijke Vereniging De Friesche Elf Steden";
$city = "Leeuwarden";
$province = "Friesland";
$iteration = 15;
$year = 1909;
$count = 1;

$verhaal = "De $event (Fries: $translation) is een $distance kilometer lange $toDo over $terrain die wordt georganiseerd 
door de $organiser. $city de hoofdstad van $province, is start- en aankomstplaats. De $event is inmiddels $iteration 
maal verreden en werd voor het eerst in $year gereden en wordt maximaal $count keer per winter gehouden.";

echo "<p>$verhaal</p>";

$verhaal2 = "de " . $event . " (Fries: " . $translation . ") is een " . $distance . " kilometer lange " . $toDo . " over 
" . $terrain . " die wordt georganiseerd door de " . $organiser . ". " . $city . " de hoofdstad van " . $province . ", 
is start- en aankomstplaats. De " . $event . " is inmiddels " . $iteration . " maal verreden en werd voor het eerst in "
. $year . " gereden en wordt maximaal " . $count . " keer per winter gehouden.";

echo "<p>$verhaal2</p>";

include "../../Includes/footer.php";
