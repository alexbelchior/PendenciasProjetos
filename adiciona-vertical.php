<?php
include("cabecalho.php");
include("conecta.php");
include("banco-vertical.php");

$vertical = $_POST['vertical'];

if(insereVertical($conexao, $vertical)){ ?>
	<p class="alert-success">A vertical <?=$vertical ?>, foi adicionada com sucesso.</p>
<?php }else{ ?>
	<p class="alert-danger">A vertical não foi adicionada.</p>
<?php }

include("rodape.php");
?>