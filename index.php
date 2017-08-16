<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-pendencia.php");

$pendencias = viewTotalPendenciasPorProjeto($conexao);

$total = count($pendencias);
$i = 0;
?>
<h1>Dashboard</h1>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div class="row">
	<div class="col-md-6">
		<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>


		<script type="text/javascript">
		Highcharts.chart('container', {
		    chart: {
		        plotBackgroundColor: null,
		        plotBorderWidth: null,
		        plotShadow: false,
		        type: 'pie'
		    },
		    title: {
		        text: 'Total de pendências por projeto'
		    },
		    tooltip: {
		        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		    },
		    plotOptions: {
		        pie: {
		        	size: 150,
		            allowPointSelect: true,
		            cursor: 'pointer',
		            dataLabels: {
		                enabled: true,
		                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
		                style: {
		                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
		                }
		            }
		        }
		    },
		    series: [{
		        name: 'Brands',
		        colorByPoint: true,
		        data: [<?php foreach($pendencias as $pendencia): ?>{
		            name: <?php $i++;
		            		echo "'" . $pendencia['projeto']. "'"; ?>,
		            y: <?php echo $pendencia['total']; ?>
		        }<?php if($i == $total){
		        		echo "";
		 			 }else{
		    			echo ",";
		  		} endforeach?> ]
		    }]
		});
		</script>
	</div>
	<div class="col-md-4">
		<table class="table">
			<thead>
				<th>Projeto</th>
				<th class="alinhamento-centralizado">Total</th>
			</thead>
			<?php
				foreach ($pendencias as $pendencia): ?>
					<tr>
						<td class="alinhamento-esquerda"><a href="pendencia-lista.php?id=<?=$pendencia['Projetos_id']?>"><?=$pendencia['projeto'] ?></a></td>
						<td class="alinhamento-centralizado"><?=$pendencia['total'] ?></td>
					</tr>

			<?php endforeach ?>
		</table>

	</div>

</div>

<div class="row">
		<div class="col-md-6">
			Teste
		</div>
	</div>
<?php include("rodape.php"); ?>