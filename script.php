<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoDefineCategoria.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoria($nome, $idade);

header('location: index.php');