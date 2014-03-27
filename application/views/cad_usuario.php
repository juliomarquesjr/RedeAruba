<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno ?></li>

            </ol>
            <?php
            echo form_open('dashboard/cad_user', 'role="form"');
            
            if($this->session->flashdata('insereOK') == TRUE):
            echo "<div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Sucesso!</strong> Usuário cadastrado com sucesso.
                </div>";
            endif;
            /* Nome do Usuário */
            if (form_error('nomecompleto') == TRUE) {
                 echo "<div class=\"form-group has-error\">
                  <label for=\"nomeuser\" for=\"nomecompleto\">Nome do Usu&aacute;rio</label>";
                echo form_input(array('id' => 'nomecompleto', 'name' => 'nomecompleto', 'class' => 'form-control', 'placeholder' => 'Nome do Usuário'), set_value('nomecompleto'), 'autoload');
                echo "<p class=\"text-danger\">" . form_error('nomecompleto') . "</p>";
                echo "</div>";
            } else {
                echo "<div class=\"form-group\">
                  <label for=\"nomeuser\">Nome do Usu&aacute;rio</label>";
                echo form_input(array('name' => 'nomecompleto', 'class' => 'form-control', 'placeholder' => 'Nome do Usuário'), set_value('nomecompleto'), 'autoload');
                echo "</div>";
            }
           
            /* Email */
            if (form_error('email') == TRUE) {
                echo " <div class=\"form-group has-error\">
                      <label for=\"email\">Email</label>";
                echo form_input(array('name' => 'email', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail'), set_value('email'));
                echo "<p class=\"text-danger\">" . form_error('email') . "</p>";
                echo "</div>";
            } else {
                echo " <div class=\"form-group\">
                      <label for=\"email\">Email</label>";
                echo form_input(array('name' => 'email', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail'), set_value('email'));
                echo "</div>";
            }

            
            /* Bloco do Usuario */
            echo "<div class=\"form-group\">
                      <label name= \"bloco\" for=\"bloco\">Bloco / Pr&eacute;dio</label>
                      <select class=\"form-control\" name=\"bloco\">
                          <option value=\"A\">Bloco A</option>
                          <option value=\"B\">Bloco B</option>
                          <option value=\"C\">Bloco C</option>
                          <option value=\"D\">Bloco D</option>
                          <option value=\"D\">Bloco E</option>
                      </select>
                  </div>";

            /* Numero do apartamento */
            if (form_error('apartamento') == TRUE) {
                echo "<div class=\"form-group has-error\">
                      <label for=\"apartamento\ class=\"control-label\" for=\"inputError1\">Numero do Apartamento</label>";
                echo form_input(array('name' => 'apartamento', 'class' => 'form-control', 'placeholder' => 'Numero do Apartamento'), set_value('apartamento'));
                echo "</div>";
                echo "<p class=\"text-danger\">" . form_error('apartamento') . "</p>";
            } else {
                echo "<div class=\"form-group\">
                      <label for=\"apartamento\">Numero do Apartamento</label>";
                echo form_input(array('name' => 'apartamento', 'class' => 'form-control', 'placeholder' => 'Numero do Apartamento'), set_value('apartamento'));
                echo "</div>";
            }

            /* Telefone */
            if (form_error('telefone') == TRUE) {
                echo "<div class=\"form-group has-error\">
                  <label for=\"telefone\">Telefone de contato</label>";
                echo form_input(array('name' => 'telefone', 'class' => 'form-control', 'placeholder' => 'Telefone de Contato'), set_value('telefone'));
                echo "</div>";
                echo "<p class=\"text-danger\">" . form_error('telefone') . "</p>";
            } else {
                echo "<div class=\"form-group\">
                      <label for=\"telefone\">Telefone de contato</label>";
                echo form_input(array('name' => 'telefone', 'class' => 'form-control', 'placeholder' => 'Telefone de Contato'), set_value('telefone'));
                echo "</div>";
            }
            
            /* Username */
            if (form_error('username') == TRUE) {
                 echo "<div class=\"form-group has-error\">
                  <label for=\"nomeuser\">Username</label>";
                echo form_input(array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username'), set_value('username'));
                echo "<p class=\"text-danger\">" . form_error('username') . "</p>";
                echo "</div>";
            } else {
                echo "<div class=\"form-group\">
                  <label for=\"nomeuser\">Nome do Usu&aacute;rio</label>";
                echo form_input(array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Username'), set_value('username'));
                echo "</div>";
            }


            echo "<div class=\"form-group\">";
            echo form_submit(array('name' => 'botaoCadastrar', 'class' => 'btn btn-primary'), 'Incluir Usuário');
            echo "</div>";
            echo form_close();
            ?>
        </div>
    </div><!-- /.row -->

</div><!-- /#page-wrapper -->
