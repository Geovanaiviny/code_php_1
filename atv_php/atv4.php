<?php

while (true) {

    fscanf(STDIN, "%d %d", $M, $N);


    if ($M <= 0 || $N <= 0) {
        break;
    }

    $menor = min($M, $N);
    $maior = max($M, $N);

    $sequencia = range($menor, $maior);
    $soma = array_sum($sequencia);


    echo implode(" ", $sequencia) . " Sum=" . $soma . "\n";
}


?>