<?php
function outra(callable $funcao): void
{
  echo "Executando outra função: ";
  echo $funcao();
}

outra(function () {
  return "Olá, eu sou uma função anônima!";
});
