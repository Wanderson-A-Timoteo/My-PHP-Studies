<?php
/**
 * Created by VSCode.
 * User: Wanderson A.Timoteo
 * Date: 09/07/2020
 * Time: 22:00
 */

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";


$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');