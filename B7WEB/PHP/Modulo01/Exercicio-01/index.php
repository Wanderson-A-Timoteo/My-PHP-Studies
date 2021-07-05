<!-- 
ENCONTRE O ERRO NO CÓDIGO ABAIXO

$lista = [
  'nome' => 'Bonieky',
  'idade' => 90,
  'atributos' => [
      'forca' => 60,
      'agilidade' => 80,
      'destreza' => 50,
  ],
  vida = 1000
  mana = 928
];

echo "NOME: " .$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
echo "VIDA: ".$vida;

-->
<?php
$lista = [
  'nome' => 'Bonieky',
  'idade' => 90,
  'atributos' => [
      'forca' => 60,
      'agilidade' => 80,
      'destreza' => 50,
  ],
  // vida e mana estão dentro do array lista, porém sem a sintaxe correta, precisamos declara-las como uma variavel.
  $vida = 1000,
  $mana = 928,
];

echo "NOME: " .$lista['nome']."<br/>";
echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
  // Devido $vida ser uma variavel declarada dentro do array, precisamos imprimir ela direto sem percorrer a lista. 
echo "VIDA: ".$vida;

?>

