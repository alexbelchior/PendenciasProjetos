<?php
include ("cabecalho.php");
include("conecta.php");
include("banco-pendencia.php");

$Statuss_id = $_POST['Statuss_id'];
$Complexidade_id = $_POST['Complexidade_id'];
$Projetos_id = $_POST['Projetos_id'];
$descricao = $_POST['descricao'];
$data_entrada = $_POST['data_entrada'];
$data_previsao = $_POST['data_previsao'];
$data_real = $_POST['data_real'];
$responsavel = $_POST['responsavel'];
$observacao = $_POST['observacao'];

if(inserePendencia($conexao, $Statuss_id, $Complexidade_id, $Projetos_id, $descricao, $data_entrada, $data_previsao, $data_real, $responsavel, $observacao)){ ?>
	<p class="alert-success">A pendencia foi adicionada com sucesso.</p>

<?php }else{ ?>
	<p class="alert-danger">A pendência não foi adicionada.</p>
<?php }

include("rodape.php");
?>