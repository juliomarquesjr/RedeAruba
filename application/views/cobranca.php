<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno; ?></li>
            </ol>
            
            <?php
            /*
             * Inicializa o formulario
             */
            echo form_open('dashboard/cobranca', 'role = \"form\"');

            /**
             * Exibe mensagem de erro dos campos.
             * Mensagem vinda através da library form_validation em dashboard/cad_cobranca.
             */
            echo validation_errors(
                    "<div class=\"alert alert-warning alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                            <strong>Atenção!</strong> ", "</div>");

            /*
             * Fim da exibição de erros.
             */
            echo "<div class=\"form-group\">"
            . "<label for=\"userativo\">Selecione o Destinat&aacute;rio</label>"
            . "<fieldset id=\"ativo\"> "
            . "<select class=\"form-control\" name=\"usuario\">";

            foreach ($lista_usuarios as $linha) {
                echo "<option value=\"" . $linha->id . "\">" . $linha->nomecompleto . "</option>";
            }

            echo "</select>
                </fieldset>
            </div>";
            echo "<div class=\"form-group\"><label>Valor Cobrado</label>";
                echo form_input(array('name' => 'valor', 'class' => 'form-control', 'placeholder' => 'Valor em reais'), set_value('valor'));
                echo "</div>";

            echo "<div class=\"form-group\"><label>Descrição</label>";
                echo form_textarea(array('name' => 'obs', 'class' => 'form-control'), set_value('obs'));
                echo "</div>";

            echo form_submit(array('name' => 'enviar', 'class' => 'btn btn-primary'), 'Cadastrar');
            echo form_close();
           
            ?>
        </div>
    </div>

</div>
