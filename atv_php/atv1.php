<?php

$entr = readline();
$valor = explode(" ", $entr);

$num_1 = (int)$valor[0];
$num_2 = (int)$valor[1];
$num_3 = (int)$valor[2];


function maiordois($a, $b) {
  return ($a + $b + abs($a - $b)) / 2;
}

$maior_1 = maiordois($num_1, $num_2);
$maior_t = maiordois($maior_1, $num_3);

echo $maior_t . " eh o maior\n";

?>