<?php

$dados = require 'dados.php';

// Precisamos saber a quantidade de países em dados, então podemos usar a função array_walk para percorrer o array
array_walk($dados, function () use (&$contador) {
  $contador++;
});
echo "Número de países com array_walk: $contador\n";

// Devemos usar as funções já existentes que fazem a mesma coisa, como por exemplo neste caso a função "count".
$contador = count($dados);
echo "Número de países com a função count: $contador\n";
