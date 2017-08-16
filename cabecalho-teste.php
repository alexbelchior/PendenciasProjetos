<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/projetos.css">
</head>
  <body>

  <?php
    $prioridade = 'Alta';
    echo $prioridade;
  ?>
    <table border="1">
      <thead>
        <th>Nome</th>
        <th>Complexidade</th>
      </thead>
      <?php if($prioridade == 'Alta'){?>
      <tr class="tr-alta">
        <td>BVPMail</td>
        <td>Alta</td>
      </tr>
      <tr>
        <td>Seguro Auto Integrado</td>
        <td>Média</td>
      </tr>
      <tr>
        <td>Dental</td>
        <td>Média</td>
      </tr>
      <tr>
        <td>Cobrança</td>
        <td>Alta</td>
      </tr>
      <?php }else{ ?>
        <tr>
          <td>BVPMail</td>
          <td>Alta</td>
        </tr>
        <tr>
          <td>Seguro Auto Integrado</td>
          <td>Média</td>
        </tr>
        <tr>
          <td>Dental</td>
          <td>Média</td>
        </tr>
        <tr>
          <td>Cobrança</td>
          <td>Alta</td>
        </tr>
       <?php } ?> 
    </table>


  </body>

</html>