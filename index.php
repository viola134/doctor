<?php
$b = 37.7;
$a = rand(360, 410)/10;
echo ($a>$b? "<span style = \"color: red;\">Болен! </span>" : ($a == $b ?
"Что-то нездоровится..." : "<span style = \" color: blue;\"> Здоров!</span>"));