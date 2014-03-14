  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini);?>"> Dashboard</a> / <?php echo $titulo_interno;?></li>
              
            </ol>
              <?php echo form_open('dashboard/envia_cobranca'); 
                echo validation_errors('<p>','</p>');
              ?>
              
                  
                  <div class="form-group">
                      <label for="valor">Valor a cobrado</label>
                      <?php echo form_input(array('name'=>'valor', 'class'=>'form-control', 'placeholder'=>'Valor'), set_value('valor'))?>
                      
                  </div>
                  
                  
                  <div class="form-group">
                      
                      <?php echo form_submit(array('name'=>'enviar', 'class'=>'btn btn-primary', 'value'=>'Enviar Mensagem'))?>
                  </div>
              <?php echo form_close();?>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
