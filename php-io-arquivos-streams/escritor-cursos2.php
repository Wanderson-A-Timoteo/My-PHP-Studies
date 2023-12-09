<?php
// fopen abre o arquivo e 'a' prepara para escrever no arquivo
$arquivo = fopen('cursos-php.txt', 'a');

// $curso armazena a string passada para ser escrita no arquivo
$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

// fwrite recebe 2 ou 3 parametros, se for 2 recebe o arquivo já aberto para escrita e o texto para ser escrito o terceiro parametro refere-se a quantidade de caracteres que desejamos escrever no arquivo. Neste caso recebe o arquivo e o conteúdo para ser escrito no arquivo.
fwrite($arquivo, $curso);

// fclose Fecha o arquivo
fclose($arquivo);
