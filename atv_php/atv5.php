<?php

while (($L = intval(readline())) != 0) {
  $velo = explode(' ', readline());
  $mveloz = max($velo);

  if ($mveloz < 10) {
        echo "1\n";
    } elseif ($mveloz < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}


?>
