<?php
include("cabecalho.php");
include("conecta.php");
include("banco-complexidade.php");

$tipo = $_POST['tipo'];

if(insereComplexidade($conexao, $tipo)){ ?>
	<p class="alert-success">A complexidade <?=$tipo ?>, foi adicionada com sucesso.</p>
<?php }else{ ?>
	<p class="alert-danger">A complexidade não foi adicionada.</p>
<?php }

include("rodape.php");
?>