<?php
    include "variabelen.php";
    echo "<br>" .$year . " " . $name;

date_default_timezone_set("Europe/Amsterdam");

$uur = date("H");

if($uur >= 0 && $uur < 5)
{
    echo "<br>Goedennacht";
}
elseif($uur >= 5 && $uur < 12)
{
    echo "<br>Goedenochtend";
}
elseif($uur >= 12 && $uur < 17)
{
    echo "<br>Goedenmiddag";
}
elseif($uur >= 17 && $uur <= 24)
{
    echo "<br>Goedenavond";
}

?>
</div>
</body>
</html>