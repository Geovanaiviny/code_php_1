<?php

while (true) {

    fscanf(STDIN, "%d %d %d %d", $H1, $M1, $H2, $M2);


    if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
        break;
    }

    $minutos_sono = ($H2 * 60 + $M2) - ($H1 * 60 + $M1);


    elseif ($minutos_sono < 0) {
        $minutos_sono += 24 * 60;
    }

    echo "$minutos_sono\n";
}

?>
