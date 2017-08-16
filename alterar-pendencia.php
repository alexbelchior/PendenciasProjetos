<?php
include ("cabecalho.php");
include("conecta.php");
include("banco-pendencia.php");

$id = $_POST['id'];
$Statuss_id = $_POST['Statuss_id'];
$Complexidade_id = $_POST['Complexidade_id'];
$Projetos_id = $_POST['Projetos_id'];
$descricao = $_POST['descricao'];
$data_entrada = $_POST['data_entrada'];
$data_previsao = $_POST['data_previsao'];
$data_real = $_POST['data_real'];
$responsavel = $_POST['responsavel'];
$observacao = $_POST['observacao'];

if(alteraPendencia($conexao, $id, $Statuss_id, $Complexidade_id, $Projetos_id, $descricao, $data_entrada, $data_previsao, $data_real, $responsavel, $observacao)){ ?>
	<p class="alert-success">A pendencia foi atualizada.</p>

<?php }else{ ?>
	<p class="alert-danger">A pendência não foi atualizada.</p>
<?php }

include("rodape.php");
?>