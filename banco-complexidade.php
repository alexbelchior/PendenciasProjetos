<?php
include("conecta.php");

function insereComplexidade($conexao, $tipo){
	$query = "insert into complexidade(tipo) values('{$tipo}')";

	return mysqli_query($conexao, $query);
}

function listaComplexidades($conexao){

	$complexidades = array();
	$query = "select * from complexidade";
	$resultado = mysqli_query($conexao, $query);
	
	while($complexidade = mysqli_fetch_assoc($resultado)){
		array_push($complexidades, $complexidade);
	}

	return $complexidades;

}