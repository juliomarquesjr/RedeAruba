<div id="page-wrapper">

    <div class="row">
       <div class="jumbotron">
  <h1><?php echo $mensagem['assunto']; ?></h1>
  <h4><strong><i class="fa fa-users"></i>&nbsp;Enviado por: <?php echo $mensagem['nomecompleto']; ?></strong></h4>
  <h4><strong><i class="fa fa-calendar"></i>&nbsp;Data do Envio: <?php echo $mensagem['data_envio']; ?></strong></h4><br />
  
  <h3><?php echo $mensagem['msg']; ?></h3><br />
  <p><a href="<?php echo base_url("dashboard/apagarEmail/".$mensagem['id']); ?>" class="btn btn-primary btn-lg" role="button">Apagar</a></p>
</div>
</div>
</div>