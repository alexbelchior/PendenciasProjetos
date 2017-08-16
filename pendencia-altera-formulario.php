<?php
include("cabecalho.php");
include("banco-status.php");
include("banco-complexidade.php");
include("banco-projeto.php");
include("banco-pendencia.php");

$id = $_GET['id'];
$pendencia = buscaPendencia($conexao, $id);
$status = listaStatus($conexao);
$complexidades = listaComplexidades($conexao);
$projetos = listaProjetosAtivos($conexao);
?>
	<h1>Atualizar Pendência</h1>
	<form action="alterar-pendencia.php" method="post">
		<input type="hidden" name="id" value="<?=$pendencia['id']?>">
		<table class="table table-striped table-bordered alinhamento-esquerda">

			<tr>
				<td class="alinhamento-direita">Status:</td>
				<td>
					<select name="Statuss_id" class="form-control tamanho-m">
					<?php foreach($status as $stat):
						$statusSelecionado = $pendencia['Statuss_id'] == $stat['id'];
						$selecao = $statusSelecionado ? "selected='selected'" : "";
					?>
						<option value="<?=$stat['id'] ?>" <?=$selecao?>><?=$stat['tipo']?></option>
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Complexidade:</td>
				<td>
					<select name="Complexidade_id" class="form-control tamanho-m">
					<?php foreach($complexidades as $complexidade):
						$complexidadeSelecionada = $pendencia['Complexidade_id'] == $complexidade['id'];
						$selecao = $complexidadeSelecionada ? "selected='selected'" : "";
					?>
						<option value="<?=$complexidade['id']?>" <?=$selecao?>><?=$complexidade['tipo']?></option>
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Projeto:</td>
				<td>
					<select name="Projetos_id" class="form-control tamanho-gg">
					<?php foreach($projetos as $projeto): 
						$projetoSelecionado = $pendencia['Projetos_id'] == $projeto['id'];
						$selecao = $projetoSelecionado ? "selected='selected'" : "";
					?>
						<option value="<?=$projeto['id']?>" <?=$selecao?>><?=$projeto['nome']?></option>
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Descrição:</td>
				<td><textarea class="form-control" cols="60" rows="10" name="descricao" ><?=$pendencia['descricao']?></textarea></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Entrada:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_entrada" value="<?=$pendencia['data_entrada']?>"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Previsão:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_previsao" value="<?=$pendencia['data_previsao']?>"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Real:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_real" value="<?=$pendencia['data_real']?>"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Responsável:</td>
				<td><input class="form-control tamanho-g" type="text" name="responsavel" value="<?=$pendencia['responsavel']?>"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Observações:</td>
				<td><textarea class="form-control" cols="60" rows="10" name="observacao"><?=$pendencia['observacao']?></textarea></td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Atualizar"></td>
			</tr>
			</table>
	</form>
<?php include("rodape.php"); ?>