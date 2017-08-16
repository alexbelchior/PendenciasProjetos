<?php
include("conecta.php");

function insereStatus($conexao, $tipo){
	$query = "insert into statuss(tipo) values('{$tipo}')";

	return mysqli_query($conexao, $query);
}

function listaStatus($conexao){

	$status = array();
	$query = "select * from statuss";
	$resultado = mysqli_query($conexao, $query);
	
	while($stat = mysqli_fetch_assoc($resultado)){
		array_push($status, $stat);
	}

	return $status;

}