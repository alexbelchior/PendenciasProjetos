<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-vertical.php");
?>
	<form action="adiciona-vertical.php" method="post">
		<table class="table">

			<tr>
				<td class="alinhamento-direita">Vertical:</td>
				<td><input class="form-control tamanho-gg" type="text" name="vertical" required=""></td>
			</tr>
			
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
			</table>
	</form>
<?php
	$verticais = listaVertical($conexao);
?>
	<table class="table table-striped table-bordered alinhamento-esquerda">
	<thead class="alinhamento-centralizado">
		<th>Id</th>
		<th>Tipo</th>
	</thead>
	<?php
	foreach ($verticais as $vertical): ?>
		
		<tr>
			<td><?=$vertical['id'] ?></td>
			<td><?=$vertical['vertical'] ?></td>
		</tr>
	<?php
	endforeach
	?>

</table>

<?php include("rodape.php"); ?>