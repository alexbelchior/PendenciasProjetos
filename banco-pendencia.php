<?php
include("conecta.php");

function inserePendencia($conexao, $Statuss_id, $Complexidade_id, $Projetos_id, $descricao, $data_entrada, $data_previsao, $data_real, $responsavel, $observacao){

	$query = "insert into pendencias (Statuss_id, Complexidade_id, Projetos_id, descricao, data_entrada, data_previsao, data_real, responsavel, observacao) values({$Statuss_id}, {$Complexidade_id}, {$Projetos_id}, '{$descricao}', '{$data_entrada}', '{$data_previsao}', '{$data_real}', '{$responsavel}', '{$observacao}')";

	return mysqli_query($conexao, $query);

}

function listaPendencias($conexao){

	//$produtos = []; Versões mais recentes do php para se declarar um array
	$pendencias = array();
	$resultado = mysqli_query($conexao, "select * from pendencias");
	while($pendencia = mysqli_fetch_assoc($resultado)){
		array_push($pendencias, $pendencia);
	}
	
	return $pendencias;
}

function buscaPendenciaProjeto($conexao, $id){
	$pendencias = array();
	$query = "select pd.* , s.tipo as status, c.tipo as complexidade, p.nome as projeto from pendencias as pd join statuss as s on s.id=pd.Statuss_id join complexidade as c on c.id=pd.Complexidade_id join projetos as p on p.id=pd.Projetos_id where pd.Projetos_id={$id} and pd.Statuss_id<>3";
	$resultado = mysqli_query($conexao, $query);
	while ($pendencia = mysqli_fetch_assoc($resultado)){
		array_push($pendencias, $pendencia);
	}

	return $pendencias;
}

function buscaPendencia($conexao, $id){

	$query = "select * from pendencias where id={$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function buscaTodasPendencias($conexao){
		$pendencias = array();
	$query = "select pd.* , s.tipo as status, c.tipo as complexidade, p.nome as projeto from pendencias as pd join statuss as s on s.id=pd.Statuss_id join complexidade as c on c.id=pd.Complexidade_id join projetos as p on p.id=pd.Projetos_id where s.tipo <> 'Fechado'";
	$resultado = mysqli_query($conexao, $query);
	while ($pendencia = mysqli_fetch_assoc($resultado)){
		array_push($pendencias, $pendencia);
	}

	return $pendencias;
}

function alteraPendencia($conexao, $id, $Statuss_id, $Complexidade_id, $Projetos_id, $descricao, $data_entrada, $data_previsao, $data_real, $responsavel, $observacao){

	$query = "update pendencias set Statuss_id = {$Statuss_id}, Complexidade_id = {$Complexidade_id}, Projetos_id = {$Projetos_id}, descricao = '{$descricao}', data_entrada = '{$data_entrada}', data_previsao = '{$data_previsao}', data_real = '{$data_real}', responsavel = '{$responsavel}', observacao = '{$observacao}' where id = '{$id}'";

	return mysqli_query($conexao, $query);

}

function viewTotalPendenciasPorProjeto($conexao){

	$pendencias = array();
	$query = "select * from view_pendencias_total_por_projeto";
	$resultado = mysqli_query($conexao, $query);
	while ($pendencia = mysqli_fetch_assoc($resultado)){
		array_push($pendencias, $pendencia);
	}

	return $pendencias;

}

function viewTotalPendenciaComplexidade($conexao){
	$pendencias = array();
	$query = "select * from view_pendencias_total_complexidade";
	$resultado = mysqli_query($conexao, $query);
	while ($pendencia = mysqli_fetch_assoc($resultado)){
		array_push($pendencias, $pendencia);
	}

	return $pendencias;
}
