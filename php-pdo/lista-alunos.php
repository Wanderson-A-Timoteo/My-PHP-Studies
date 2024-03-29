<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = \Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM students;');

// Array associativo FETCH_ASSOC retorna o indice como uma coluna
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach($studentDataList as $studentData) {
  if ($studentData['name'] !== null) {
    $studentList[] = new Student(
      $studentData['id'], 
      $studentData['name'], 
      new \DateTimeImmutable($studentData['birth_date'])
    );
  }
}


var_dump($studentList);

/**
 * Ao tentar buscar dados do banco de dados, você pode informar como quer que os métodos do PDO formatem esses dados pra você. Os principais fetch modes ou fetch styles são: 
 * 
 * PDO::FETCH_ASSOC: Retorna cada linha como um array associativo, onde a chave é o nome da coluna, e o valor é o valor da coluna em si.
 *  
 * PDO::FETCH_BOTH (esse é o padrão): Retorna cada linha como um array com as chaves sendo tanto o índice da coluna (começando do 0) quanto o nome da coluna, ou seja, os valores acabam ficando duplicados nesse formato.
 * 
 * PDO::FETCH_CLASS: Cada linha do resultado é retornado como uma instância da classe especificada em outro parâmetro. A classe não pode ter parâmetros no construtor e cada coluna terá o seu valor atribuído a uma propriedade de mesmo nome no objeto criado.
 * 
 * PDO::FETCH_INTO: Funciona de forma muito semelhante ao FETCH_CLASS, mas ao invés de criar o objeto para você, ele preenche um objeto já criado com os valores buscados.
 * 
 * PDO::FETCH_NUM: Retorna cada linha como um array, onde a chave é o índice numérico da coluna, começando do 0, e o valor é o valor da coluna em si.
 * 
 * Para ver os demais modos de busca e ler com mais detalhes os explicados aqui, você pode conferir a documentação oficial do PHP: PDOStatement::fetch.
*/