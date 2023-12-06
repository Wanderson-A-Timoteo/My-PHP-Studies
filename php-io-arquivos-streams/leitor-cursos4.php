<?php
// file abre o arquivo e lê linha por linha, transformando o arquivo num array onde cada linha é um item deste array.
$cursos = file('lista-cursos.txt');
// var_dump mostra o conteúdo da variavel $cursos para confirmar que file transformou o arquivo num array. 
var_dump($cursos);
