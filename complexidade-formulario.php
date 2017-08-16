<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-complexidade.php");
?>
	<form action="adiciona-projeto.php" method="post">
		<table class="table">

			<tr>
				<td class="alinhamento-direita">Tipo:</td>
				<td><input class="form-control tamanho-gg" type="text" name="tipo" required=""></td>
			</tr>
			
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
			</table>
	</form>
<?php
	$complexidades = listaComplexidades($conexao);
?>
	<table class="table table-striped table-bordered alinhamento-esquerda">
	<thead class="alinhamento-centralizado">
		<th>Id</th>
		<th>Tipo</th>
	</thead>
	<?php
	foreach ($complexidades as $complexidade): ?>
		
		<tr>
			<td><?=$complexidade['id'] ?></td>
			<td><?=$complexidade['tipo'] ?></td>
		</tr>
	<?php
	endforeach
	?>

</table>

<?php include("rodape.php"); ?>