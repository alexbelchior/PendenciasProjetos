<?php
include ("cabecalho.php");
include("conecta.php");
include("banco-projeto.php");

$projetos = listaProjetos($conexao);
?>
<h1>Projetos</h1>
<table class="table table-striped table-bordered alinhamento-esquerda">
	<thead class="alinhamento-centralizado">
		<th>Nome</th>
		<th>Vertical</th>
		<th>Proposta</th>
		<th>GCTI</th>
		<th>PJC</th>
		<th>Prazo</th>
		<th>Início</th>
		<th>Fim</th>
		<th>Custo</th>
		<th>Venda</th>
		<th>Detalhes</th>
	</thead>
	<?php
	foreach ($projetos as $projeto): ?>
		
		<tr>
			<td><?=$projeto['nome'] ?></td>
			<td><?=$projeto['nome_vertical']?></td>
			<td><?=$projeto['nr_proposta'] ?></td>
			<td><?=$projeto['nr_gcti'] ?></td>
			<td><?=$projeto['pjc'] ?></td>
			<td><?=$projeto['nr_dias'] ?></td>
			<td><?=$projeto['data_inicio'] ?></td>
			<td><?=$projeto['data_fim'] ?></td>
			<td><?=$projeto['hrs_custo'] ?></td>
			<td><?=$projeto['hrs_venda'] ?></td>
			<td><a href="pendencia-lista.php?id=<?=$projeto['id']?>"><img src="imgs/detail-icon.png" width="20" height="20"><a href="pendencia-formulario.php"><img src="imgs/add-icon.png" width="20" height="20"></td>
		</tr>
	<?php
	endforeach
	?>

</table>

<?php include("rodape.php");