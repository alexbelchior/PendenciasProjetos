<?php
include("cabecalho.php");
include("banco-vertical.php");

$verticais = listaVertical($conexao);
?>
	<form action="adiciona-projeto.php" method="post">
		<table class="table table-striped table-bordered alinhamento-esquerda">

			<tr>
				<td class="alinhamento-direita">Nome:</td>
				<td><input class="form-control tamanho-gg" type="text" name="nome" required=""></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Vertical:</td>
					<td>
						<select name="vertical_id" class="form-control tamanho-m">
						<?php foreach($verticais as $vertical): ?>
							<option value="<?=$vertical['id'] ?>"><?=$vertical['vertical']?></option>
						<?php endforeach ?>
					</td>

			</tr>
			<tr>
				<td class="alinhamento-direita">Nr Proposta:</td>
				<td><input class="form-control tamanho-p" type="text" name="nr_proposta" required=""></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Nr GCTI:</td>
				<td><input class="form-control tamanho-p" type="text" name="nr_gcti"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">PJC:</td>
				<td><input class="form-control tamanho-p" type="text" name="pjc"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Nr Dias:</td>
				<td><input class="form-control tamanho-pp" type="number" name="nr_dias"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Início:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_inicio"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Data Fim:</td>
				<td><input class="form-control tamanho-m" type="date" name="data_fim"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Custo:</td>
				<td><input class="form-control tamanho-p" type="number" name="hrs_custo"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Venda:</td>
				<td><input class="form-control tamanho-p" type="number" name="hrs_venda"></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Observações:</td>
				<td><textarea class="form-control" cols="60" rows="10" name="observacoes"></textarea></td>
			</tr>
			<tr>
				<td class="alinhamento-direita">Ativo:</td>
				<td><select name="ativo" class="form-control tamanho-p" >
					<option value="S">Sim</option>
					<option value="N">Não</option></td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
			</table>
	</form>
<?php include("rodape.php"); ?>
