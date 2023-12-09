<?php

$varialvel = 'teste';

function outra(callable $funcao): void
{
  echo "Executando outra função: ";
  echo $funcao();
}

$nomeDaFuncao = function () use ($varialvel) {
  echo $varialvel;
  return "Olá, eu sou uma função anônima!";
};

outra($nomeDaFuncao);

var_dump($nomeDaFuncao);
