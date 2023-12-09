<?php
// fopen abre o arquivo e 'r' prepara para leitura
$arquivo = fopen('lista-cursos.txt', 'r');
// Le o arquivo linha por linha
while (!feof($arquivo)) {
    // fgets lê linha por linha
    $curso = fgets($arquivo);
    // echo mostra a linha que foi lida e PHP_EOL pula uma linha
    echo $curso . PHP_EOL;
}
// fclose fecha o arquivo
fclose($arquivo);
