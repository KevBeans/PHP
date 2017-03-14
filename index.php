
<meta charset = "utf-8">

<script src="script.js"></script>

<?php

require 'components.php';
require 'function.php';
$name = "Tarmo";

aeg();

// üherealine kommentaar

/*
See on 
kommentaar
mitmel real
*/

//näitame praegust aega ja anname soovitusi

// tagasi algusesse
home();
menu($menu_begin, $menu_arr,$menu_end);

// näited teksti kuvamise kohta
echo "$name esimene PHP's kirjutatud lause!<br>";
echo '<b>$name esimene PHPs kirjutatud lause!</b><br>';
echo "Nüüd vaatame täpitähti<br>";


GetVisitorIp();
counter();

?>