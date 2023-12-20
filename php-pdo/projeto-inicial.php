<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Wanderson Timóteo',
    new \DateTimeImmutable('1983-12-20')
);

echo $student->age();
