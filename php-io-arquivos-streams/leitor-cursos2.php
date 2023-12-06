<?php
// fopen abre o arquivo e 'r' prepara para leitura
$arquivo = fopen('lista-cursos.txt', 'r');
// filesize verifica o tamanho do arquivo em bytes
$tamanhoDoArquivo = filesize('lista-cursos.txt');
// fread lê todo o arquivo
$cursos = fread($arquivo, $tamanhoDoArquivo);
// Mostra todo o conteudo do arquivo de uma unica vez
echo $cursos;
// fclose fecha o arquivo
fclose($arquivo);
