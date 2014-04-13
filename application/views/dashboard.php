  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url($pg_ini); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
              
            </ol>
          </div>
        </div><!-- /.row -->
       
        <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title"><i class="fa fa-clock-o"></i>&nbsp; Status do Servidor</h3>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  <a href="#" class="list-group-item">
                    <span class="badge badge-verde">Online</span>
                    <i class="fa fa-globe"></i> &nbsp;Serviço da Internet
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">Offline</span>
                    <i class="fa fa-comment"></i> &nbsp;Servidor de Filmes
                  </a>
                  <a href="#" class="list-group-item">
                    <span class="badge">Offline</span>
                    <i class="fa fa-globe"></i>&nbsp;Servidor de Internet
                  </a>
                  
                </div>
                <div class="text-right">
                    <a href="#">Verificar novamente&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
            
            <div class="col-lg-8">
            <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="panel-title"><i class="fa fa-money"></i>&nbsp;Transações Financeiras</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                      <tr>
                        <th class="header">Fatura</th>
                        <th class="header">Data da Fatura</th>
                        <th class="header">Valor da Fatura</th>
                        <th class="header">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

					foreach ($faturas as $fat) {

						echo "<tr>
                        <td>" . $fat['id'] . "</td>
                        <td>" . date("d/m/Y", strtotime($fat['data_pagamento'])) . "</td>
                        <td>R$ " . str_replace('.', ',', $fat['valor']) . "</td>";

						if ($fat['status'] == 'P')
							echo "<td><span class=\"label label-success\">Pago</span></td>";

						if ($fat['status'] == 'N')
							echo "<td><span class=\"label label-warning\">Pendente</span></td>";

						echo "</tr>";

					}
                    ?>
                    </tbody>
                  </table>
                </div>
                <div class="text-right">
                    <a href="#">Ver todas as Transações&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
            
        </div>
        
      </div><!-- /#page-wrapper -->
  
