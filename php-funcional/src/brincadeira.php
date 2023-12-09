<?php
function outra(callable $funcao): void
{
  echo "Executando outra função: ";
  echo $funcao();
}

$nomeDaFuncao = function () {
  return "Olá, eu sou uma função anônima!";
};

outra($nomeDaFuncao);
