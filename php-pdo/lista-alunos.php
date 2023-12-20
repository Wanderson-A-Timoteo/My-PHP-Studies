<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students');

// Array associativo FETCH_ASSOC retorna o indice como uma coluna
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach($studentDataList as $studentData) {
  $studentList[] = new Student(
    $studentData['id'], 
    $studentData['name'], 
    new DateTimeImmutable($studentData['birth_date'])
  );
}


var_dump($studentList);

