<?php

$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

// file_put_contents Se o arquivo existir, abre o arquivo, escreve o conteúdo e fecha o arquivo, se não existir cria o arquivo, escreve o conteúdo e fecha o arquivo. FILE_APPEND adiciona o conteúdo(escreve) no final do arquivo.
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);
