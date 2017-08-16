<?php
include("cabecalho.php");
include("banco-status.php");
include("banco-complexidade.php");
include("banco-projeto.php");

$status = listaStatus($conexao);
$complexidades = listaComplexidades($conexao);
$projetos = listaProjetosAtivos($conexao);
?>
	<h1>Cadastro de Pendência</h1>
	<form action="adiciona-pendencia.php" method="post">
		<table class="table table-striped table-bordered alinhamento-esquerda">

			<tr>
				<td class="alinhamento-direita">Status:</td>
				<td>
					<select name="Statuss_id" class="form-control tamanho-m">
					<?php foreach($status as $stat): ?>
						<option value="<?=$stat['id'] ?>"><?=$stat['tipo']?></option>
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Complexidade:</td>
				<td>
					<select name="Complexidade_id" class="form-control tamanho-m">
					<?php foreach($complexidades as $complexidade): ?>
						<option value="<?=$complexidade['id']?>"><?=$complexidade['tipo']?></option>
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Projeto:</td>
				<td>
					<select name="Projetos_id" class="form-control tamanho-gg">
					<?php foreach($projetos as $projeto): ?>
						<option value="<?=$projeto['id']?>"><?=$projeto['nome']?></option>
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Descrição:</td>
				<td><textarea class="form-control" cols="60" rows="10" name="descricao"></textarea></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Entrada:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_entrada"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Previsão:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_previsao"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Real:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_real"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Responsável:</td>
				<td><input class="form-control tamanho-g" type="text" name="responsavel"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Observações:</td>
				<td><textarea class="form-control" cols="60" rows="10" name="observacao"></textarea></td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
			</table>
	</form>
<?php include("rodape.php"); ?>