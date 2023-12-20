<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectorCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectorCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?');
$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
