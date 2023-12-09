<?php

$curso = "Design Patterns PHP I: Boas práticas de programação";
// file_put_contents Se o arquivo existir, abre o arquivo, escreve o conteúdo e fecha o arquivo, se não existir cria o arquivo, escreve o conteúdo e fecha o arquivo.
file_put_contents('cursos-php.txt', $curso);
