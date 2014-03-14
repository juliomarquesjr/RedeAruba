  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini);?>"> Dashboard</a> / <?php echo $titulo_interno ?></li>
              
            </ol>
              <form role="form">
                  <div class="form-group">
                      <label for="nomeuser">Nome do Usu&aacute;rio</label>
                      <input type="text" class="form-control" placeholder="Nome do Usu&aacute;rio" id="nomeusuario">
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                      <label for="bloco">Bloco / Pr&eacute;dio</label>
                      <select multiple class="form-control">
                          <option value="A">Bloco A</option>
                          <option value="B">Bloco B</option>
                          <option value="C">Bloco C</option>
                          <option value="D">Bloco D</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="apartamento">Numero do Apartamento</label>
                      <input type="text" class="form-control" placeholder="Numero do apartamento">
                  </div>
                  <div class="form-group">
                      <label for="telefone">Telefone de contato</label>
                      <input type="text" class="form-control" placeholder="Telefone de contato">
                  </div>
                  <div class="form-group">
                      <label for="userativo">Usu&aacute;rio ativo?</label>
                      <fieldset id="ativo" disabled="true">
                      <select class="form-control">
                          <option value="1">Sim</option>
                          <option value="0">N&atilde;o</option>
                      </select>
                      </fieldset>
                  </div>
                  <div class="form-group">
                      <button type="button" class="btn btn-primary" >Incluir usu&aacute;rio</button>
                  </div>
              </form>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
