<?php

$X = intval(fgets(STDIN));
$Y = intval(fgets(STDIN));

$soma_impares = 0;


if ($X > $Y) {

    $temp = $X;
    $X = $Y;
    $Y = $temp;
}

for ($i = $X + 1; $i < $Y; $i++) {
    if ($i % 2 != 0) {
        $soma_impares += $i;
    }
}

echo "$soma_impares\n";

?>