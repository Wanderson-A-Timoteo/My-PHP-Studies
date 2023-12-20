<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

// Cria o objeto aluno
$student = new Student(null, 'Ana Beatriz', new DateTimeImmutable('2014-10-16'));

// Insere o aluno criado no Banco de Dados passando os parametros direto na instrução SQL para cada posição
//$sqlInsert = "INSERT INTO students(name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

// Insere o aluno criado no Banco de Dados passando os parametros como ponto de interrogação
// $sqlInsert = "INSERT INTO students(name, birth_date) VALUES (?, ?);";
// $statement = $pdo->prepare($sqlInsert);
// $statement->bindValue(1, $student->name());
// $statement->bindValue(2, $student->birthDate()->format('Y-m-d'));


// Insere o aluno criado no Banco de Dados passando os parametros nomeado
$sqlInsert = "INSERT INTO students(name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));


if($statement->execute()) {
  echo "Aluno cadastrado com sucesso! ID: {$pdo->lastInsertId()}\n";
}


// var_dump retornará 1 caso ocorrer tudo certo, pdo->exec faz a inserção
//var_dump($pdo->exec($sqlInsert));
