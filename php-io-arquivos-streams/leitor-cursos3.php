<?php
// file_get_contents abre o arquivo, lê todo o conteúdo e fecha o arquivo.
$cursos = file_get_contents('lista-cursos.txt');
// Mostra todo o conteúdo que foi lido do arquivo e armazenado navariável $cursos
echo $cursos;
