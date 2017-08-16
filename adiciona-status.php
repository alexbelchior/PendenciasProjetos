<?php
include("cabecalho.php");
include("conecta.php");
include("banco-status.php");

$tipo = $_POST['tipo'];

if(insereStatus($conexao, $tipo)){ ?>
	<p class="alert-success">O Status <?=$tipo ?>, foi adicionado com sucesso.</p>
<?php }else{ ?>
	<p class="alert-danger">O Status não foi adicionado.</p>
<?php }

include("rodape.php");
?>