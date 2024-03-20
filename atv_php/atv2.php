<?php

$valor = intval(readline());

$cedulas = array(100, 50, 20, 10, 5, 2, 1);

echo "$valor\n";
foreach ($cedulas as $valor_cedula) {
    $quantidade = intval($valor / $valor_cedula);
    $valor %= $valor_cedula;
    echo "$quantidade nota(s) de R$ $valor_cedula,00\n";
}

?>
