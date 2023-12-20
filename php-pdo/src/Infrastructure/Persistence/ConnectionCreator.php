<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectorCreator
{
  public static function createConnection(): PDO
  {
    $databasePath = __DIR__ . '/../../../banco.sqlite';
    return new PDO('sqlite:' . $databasePath);
  }
}
