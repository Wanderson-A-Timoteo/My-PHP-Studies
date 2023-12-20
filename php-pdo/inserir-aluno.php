<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

// Cria o objeto aluno
$student = new Student(null, 'Wanderson Timóteo', new DateTimeImmutable('1983-12-20'));

// Insere o aluno criado no Banco de Dados
$sqlInsert = "INSERT INTO students(name, birth_date) VALUES('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

// var_dump retornará 1 caso ocorrer tudo certo, pdo->exec faz a inserção
var_dump($pdo->exec($sqlInsert));
