  <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
              <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini);?>"> Dashboard</a> / <?php echo $titulo_interno ?></li>
              
            </ol>
              <?php echo form_open('dashboard/cad_user', 'role="form"');
                    echo validation_errors(
                    "<div class=\"alert alert-warning alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            <strong>Atenção!</strong> ", "</div>");
                   
                  echo "  
                  <div class=\"form-group\">
                  <label for=\"nomeuser\">Nome do Usu&aacute;rio</label>";
                  echo form_input(array('name' => 'nomecompleto', 'class' => 'form-control', 'placeholder' => 'Nome do Usuário'), set_value('nomecompleto'), 'autoload');
                  echo "</div>";    
                  
                  echo " <div class=\"form-group\">
                      <label for=\"email\">Email</label>";
                  echo form_input(array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail'), set_value('email'));
                  echo "</div>";
                  
                  echo "<div class=\"form-group\">
                      <label for=\"bloco\">Bloco / Pr&eacute;dio</label>
                      <select multiple class=\"form-control\">
                          <option value=\"A\">Bloco A</option>
                          <option value=\"B\">Bloco B</option>
                          <option value=\"C\">Bloco C</option>
                          <option value=\"D\">Bloco D</option>
                      </select>
                  </div>";
                  
                  
                  echo "<div class=\"form-group\">
                      <label for=\"apartamento\">Numero do Apartamento</label>";
                  echo form_input(array('name' => 'apartamento', 'class' => 'form-control', 'placeholder' => 'Numero do Apartamento'), set_value('apartamento'));
                  echo "</div>";
                      
                  echo "<div class=\"form-group\">
                      <label for=\"telefone\">Telefone de contato</label>";
                  echo form_input(array('name' => 'telefone', 'class' => 'form-control', 'placeholder' => 'Telefone de Contato'), set_value('telefone'));
                  echo "</div>";
                  
                  echo "<div class=\"form-group\">
                      <label for=\"userativo\">Usu&aacute;rio ativo?</label>
                      <fieldset id=\"ativo\" disabled=\"true\">
                      <select class=\"form-control\">
                          <option value=\"1\">Sim</option>
                          <option value=\"0\">N&atilde;o</option>
                      </select>
                      </fieldset>
                  </div>";
                  

                  echo "<div class=\"form-group\">";
                  echo form_submit(array('name' => 'botaoCadastrar', 'class' => 'btn btn-primary'), 'Incluir Usuário');
                  echo "</div>";
                  echo form_close(); ?>
          </div>
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->
