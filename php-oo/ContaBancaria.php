<?php 

declare(Strict_types=1);

class ContaBancaria 
{
  private $banco;
  /**
   * @var string
   */
  private $nomeTitular;
  /**
   * @var string
   */
  private $numeroAgencia;
  /**
   * @var string
   */
  private $numeroConta;
  /**
   * @var string
   */
  private $saldo;
  /**
   * @var float
   */

  public function _construct(
    string $banco, 
    string $nomeTitular, 
    string $numeroAgencia, 
    string $numeroConta, 
    float $saldo
    
  )
  {

    $this -> banco = $banco;
    $this -> nomeTitular = $nomeTitular;
    $this -> numeroAgencia = $numeroAgencia;
    $this -> numeroConta = $numeroConta;
    $this -> saldo = $saldo;
  }

  public function obterSaldo() : string 
  {

    return 'Seu saldo atual é R$: ' . $this -> saldo;

  }
   public function depositar(float $valor) : string 
   {
     $this -> saldo += $valor;
     return 'Depósito de R$ ' . $valor . 'realizado!';
   }

   public function sacar(float $valor) : string 
   {
     $this -> saldo -= $valor;
     return 'Saque de R$ ' . $valor . 'realizado!';
   }
}

$conta = new ContaBancaria(

  'Banco do Brasil', // banco
  'Wandwerson Timóteo', // nomeTitular
  '1534', // numeroAgencia
  '16943-1', // numeroConta
  0 // saldo
);

//var_dump($conta);
echo $conta -> obterSaldo(); // 0

echo PHP_EOL;

echo $conta -> depositar(300.00);

echo PHP_EOL;

echo $conta -> obterSaldo(); // 300.00

echo PHP_EOL;

echo $conta -> sacar(150.00);

echo PHP_EOL;

echo $conta -> obterSaldo(); // 150.00

echo PHP_EOL;