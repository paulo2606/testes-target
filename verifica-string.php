<?php

$string = readline("Digite algo: ");

$quantidadeA = substr_count(strtolower($string), 'a');

echo $quantidadeA > 0 ? "A letra 'a' aparece $quantidadeA x na string.\n" : "A letra 'a' não aparece na string.\n";

?>
