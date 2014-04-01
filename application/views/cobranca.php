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

			
			/*
			 * Fim da exibição de erros.
			 */
			echo "<div class=\"form-group\">" . "<label for=\"userativo\">Selecione o Destinat&aacute;rio</label>" . "<fieldset id=\"ativo\"> " . "<select class=\"form-control\" name=\"usuario\">";

			foreach ($usuarios as $usuario) {
				echo "<option value=\"" . $usuario['id'] . "\">" . $usuario['nomecompleto'] . "</option>";
			}

			echo "</select>
                </fieldset>
            </div>";
			echo "<div class=\"form-group\"><label>Valor Cobrado</label>";
			echo form_input(array('name' => 'valor', 'class' => 'form-control', 'placeholder' => 'Valor em reais'), set_value('valor'));
			echo form_error('valor');
			echo "</div>";

			echo "<div class=\"form-group\">";
			echo "<label>Data da Cobrança</label>";
            echo "<div class='input-group date' id='datetimepicker5' data-date-format=\"YYYY/MM/DD\">";
            echo "<input type=\"text\" class=\"form-control\" id=\"datepicker\" placeholder=\"Data da cobrança\" />";        
            echo "<span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i>";
            echo "</span></div>";

			echo "<div class=\"form-group\"><label>Descrição</label>";
			echo form_textarea(array('name' => 'obs', 'class' => 'form-control', 'placeholder' => 'Descrição da cobrança'), set_value('obs'));
			echo form_error('obs');
			echo "</div>";
			
			echo form_submit(array('name' => 'enviar', 'class' => 'btn btn-primary', 'value' => 'Enviar cobrança'));
			echo form_close();
            ?>
        </div>
 
        
    </div>

</div>
