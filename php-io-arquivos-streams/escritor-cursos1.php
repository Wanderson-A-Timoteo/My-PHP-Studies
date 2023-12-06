<?php
// fopen abre o arquivo e 'w' prepara para escrever no arquivo, mas se o arquivo não existir ele cria o arquivo e prepara para escrever
$arquivo = fopen('cursos-php.txt', 'w');

// $curso armazena a string passada para ser escrita no arquivo
$curso = 'Design Patterns PHP I: Boas práticas de programação';

// fwrite recebe 2 ou 3 parametros, se for 2 recebe o arquivo já aberto para escrita e o texto para ser escrito
// o terceiro parametro refere-se a quantidade de caracteres que desejamos escrever no arquivo, neste caso 21 caracteres
fwrite($arquivo, $curso, 21);

// fecha o arquivo
fclose($arquivo);
