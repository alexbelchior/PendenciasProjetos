<?php
include ("cabecalho.php");
include("conecta.php");
include("banco-projeto.php");

$nome = $_POST['nome'];
$nr_proposta = $_POST['nr_proposta'];
$nr_gcti = $_POST['nr_gcti'];
$pjc = $_POST['pjc'];
$nr_dias = $_POST['nr_dias'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$hrs_custo = $_POST['hrs_custo'];
$hrs_venda = $_POST['hrs_venda'];
$observacoes = $_POST['observacoes'];
$ativo = $_POST['ativo'];
$vertical_id = $_POST['vertical_id'];

if(insereProjeto($conexao, $nome, $nr_proposta, $nr_gcti, $pjc, $nr_dias, $data_inicio, $data_fim, $hrs_custo, $hrs_venda, $observacoes, $ativo, $vertical_id)){ ?>
	<p class="alert-success">O projeto <?=$nome ?>, foi adicionado com sucesso.</p>

<?php }else{ ?>
	<p class="alert-danger">O projeto não foi adicionado.</p>
<?php }

include("rodape.php");
?>