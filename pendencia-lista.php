<?php
include ("cabecalho.php");
include("conecta.php");
include("banco-pendencia.php");


$id = $_GET['id'];
if($id == 0){
$pendencias = buscaTodasPendencias($conexao);
}else{
$pendencias = buscaPendenciaProjeto($conexao, $id);
}
?>
<h1>Pendências</h1>
<div class="table-responsive">
	<table class="table table-condensed table-bordered alinhamento-esquerda">
		<thead class="alinhamento-centralizado">
			<th width="170">Projeto</th>
			<th width="82">Status</th>
			<th width="50">Complex</th>
			<th>Descrição</th>
			<th width="85">Entrada</th>
			<th width="85">Previsão</th>
			<th>Resposável</th>
			<th>Observação</th>
			<th></th>
		</thead>
		<?php
		foreach ($pendencias as $pendencia): ?>
			<?php if ($pendencia['complexidade'] == 'Alta'){?>
				<tr class="tr-alta">
					<td><?=$pendencia['projeto'] ?></td>
					<td><?=$pendencia['status']?></td>
					<td><?=$pendencia['complexidade'] ?></td>
					<td><?=$pendencia['descricao'] ?></td>
					<td><?=$pendencia['data_entrada'] ?></td>
					<td><?=$pendencia['data_previsao'] ?></td>
					<td><?=$pendencia['responsavel'] ?></td>
					<td><?=$pendencia['observacao'] ?></td>
					<td><a class="btn btn-xs btn-primary" href="pendencia-altera-formulario.php?id=<?=$pendencia['id']?>">Atualizar</td>
				</tr>
			<?php }else{ ?>
				<tr>
					<td><?=$pendencia['projeto'] ?></td>
					<td><?=$pendencia['status']?></td>
					<td><?=$pendencia['complexidade'] ?></td>
					<td><?=$pendencia['descricao'] ?></td>
					<td><?=$pendencia['data_entrada'] ?></td>
					<td><?=$pendencia['data_previsao'] ?></td>
					<td><?=$pendencia['responsavel'] ?></td>
					<td><?=$pendencia['observacao'] ?></td>
					<td><a class="btn btn-xs btn-primary" href="pendencia-altera-formulario.php?id=<?=$pendencia['id']?>">Atualizar</td>
				</tr>
			<?php } ?>
		<?php
		endforeach
		?>

	</table>
</div>
<?php include("rodape.php");