<?php
include("conecta.php");

function insereProjeto($conexao, $nome, $nr_proposta, $nr_gcti, $pjc, $nr_dias, $data_inicio, $data_fim, $hrs_custo, $hrs_venda, $observacoes, $ativo, $vertical_id){

	$query = "insert into projetos (nome, nr_proposta, nr_gcti, pjc, nr_dias, data_inicio, data_fim, hrs_custo, hrs_venda, observacoes, ativo, vertical_id) values('{$nome}', '{$nr_proposta}', '{$nr_gcti}', '{$pjc}', {$nr_dias}, '{$data_inicio}', '{$data_fim}', {$hrs_custo}, {$hrs_venda}, '{$observacoes}', '{$ativo}', {$vertical_id})";

	return mysqli_query($conexao, $query);

}

function listaProjetos($conexao){

	//$produtos = []; Versões mais recentes do php para se declarar um array
	$projetos = array();
	$resultado = mysqli_query($conexao, "select p.*, v.vertical as nome_vertical from projetos as p join vertical as v on v.id=p.vertical_id");
	while($projeto = mysqli_fetch_assoc($resultado)){
		array_push($projetos, $projeto);
	}
	
	return $projetos;
}

function listaProjetosAtivos($conexao){
	$projetos = array();
	$query = "select * from projetos where ativo = 'S'";
	$resultado = mysqli_query($conexao, $query);
	while($projeto = mysqli_fetch_assoc($resultado)){
		array_push($projetos, $projeto);
	}

	return $projetos;
}

function viewSituacaoProjetos($conexao){
	$projetos = array();
	$query = "select * from view_situacao_projetos";
	$resultado = mysqli_query($conexao, $query);
	while($projeto = mysqli_fetch_assoc($resultado)){
		array_push($projetos, $projeto);
	}

	return $projetos;

}
