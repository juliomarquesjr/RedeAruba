  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini);?>"> Dashboard</a> / <?php echo $titulo_interno;?></li>
              
            </ol>
              <form role="form">
                  <div class="form-group">
                      <label for="userativo">Selecione o usu&aacute;rio do dispositivo</label>
                      <fieldset id="ativo" disabled="true">
                      <select class="form-control">
                          <option value="1">User</option>
                          <option value="0">User</option>
                      </select>
                      </fieldset>
                  </div>
                  <div class="form-group">
                      <label for="assunto">Nome do dispositivo</label>
                      <input type="text" class="form-control" placeholder="Nome do dispositivo" id="nomedispo">
                  </div>
                  <div class="form-group">
                      <label for="assunto">Endere&ccedil;o IP</label>
                      <input type="text" class="form-control" placeholder="Endereço IP" id="ip">
                  </div>
                  <div class="form-group">
                      <label for="assunto">Endere&ccedil;o MAC</label>
                      <input type="text" class="form-control" placeholder="Endereço MAC" id="mac">
                  </div>
                  <div class="form-group">
                      <label for="email">Descri&ccedil;&atilde;o do dispositivo</label>
                      <textarea type="text" rows="8" class="form-control" placeholder="Escreva uma breve descrição do seu dispositivo..." id="descricao"></textarea>
                  </div>

                  
                  <div class="form-group">
                      <button type="button" class="btn btn-primary" >Cadastrar dispositivo</button>
                  </div>
              </form>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
