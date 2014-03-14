  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini);?>"> Dashboard</a> / <?php echo $titulo_interno;?></li>
              
            </ol>
              <form role="form">
                  <div class="form-group">
                      <label for="userativo">Selecione o Destinat&aacute;rio</label>
                      <fieldset id="ativo" disabled="true">
                      <select class="form-control">
                          <option value="1">Sim</option>
                          <option value="0">N&atilde;o</option>
                      </select>
                      </fieldset>
                  </div>
                  <div class="form-group">
                      <label for="assunto">Assunto</label>
                      <input type="text" class="form-control" placeholder="Assunto" id="assunto">
                  </div>
                  <div class="form-group">
                      <label for="email">Mensagem</label>
                      <textarea type="text" rows="8" class="form-control" placeholder="Digite aqui a sua mensagem..." id="msg_texto"></textarea>
                  </div>

                  
                  <div class="form-group">
                      <button type="button" class="btn btn-primary" >Enviar Mensagem</button>
                  </div>
              </form>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
