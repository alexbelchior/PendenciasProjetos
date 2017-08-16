<?php
include("conecta.php");

function insereVertical($conexao, $vertical){
	$query = "insert into vertical(vertical) values('{$vertical}')";

	return mysqli_query($conexao, $query);
}

function listaVertical($conexao){

	$verticais = array();
	$query = "select * from vertical";
	$resultado = mysqli_query($conexao, $query);
	
	while($vertical = mysqli_fetch_assoc($resultado)){
		array_push($verticais, $vertical);
	}

	return $verticais;

}