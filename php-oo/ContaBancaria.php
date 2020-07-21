<?php 

class ContaBancaria 
{
  public $banco;
  public $nomeTitular;
  public $numeroAgencia;
  public $numeroConta;
  public $saldo;

  public function _construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo) 
  {
    $this -> banco = $banco;
    $this -> nomeTitular = $nomeTitular;
    $this -> numeroAgencia = $numeroAgencia;
    $this -> numeroConta = $numeroConta;
    $this -> saldo = $saldo;
  }

  public function obterSaldo() 
  {

    return 'Olá, eu sou o método obterSaldo()';

  }
}

$conta = new ContaBancaria(

  'Banco do Brasil', // banco
  'Wandwerson Timóteo', // nomeTitular
  '1534', // numeroAgencia
  '16943-1', // numeroConta
  400.00 // saldo
);

var_dump($conta);
