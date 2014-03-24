<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno; ?></li>

            </ol>
            
            	<?php echo form_open("dashboard/cad_dispositivos", 'role =\"form\" ');
				
				if($this->session->flashdata('insereOK') == TRUE):
            echo "<div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Sucesso!</strong> Dispositivo cadastrado com sucesso.
                </div>";
            endif;

				echo "<div class=\"form-group\">
				<label for=\"userativo\">Selecione o Destinat&aacute;rio</label>" . "<fieldset id=\"usuario\">
				<select class=\"form-control\" name=\"usuario\">";

				foreach ($usuarios as $usuario) {
					echo "<option value=\"" . $usuario['id'] . "\">" . $usuario['nomecompleto'] . "</option>";
				}
				echo "</select>
                </fieldset>
            </div>";

				if (form_error('nomedispositivo') == TRUE) {
					echo "<div class=\"form-group has-error\">
                    <label for=\"nomedispositivo\">Nome do dispositivo</label>
                    <input name=\"nomedispositivo\" type=\"text\" class=\"form-control\" placeholder=\"Nome do dispositivo\" value=\"" . set_value('nomedispositivo') . "\">";
					echo form_error('nomedispositivo');
					echo "</div>";
				} else {
					echo "<div class=\"form-group \">
                    <label for=\"nomedispositivo\">Nome do dispositivo</label>
                    <input name=\"nomedispositivo\" type=\"text\" class=\"form-control\" placeholder=\"Nome do dispositivo\" value=\"" . set_value('nomedispositivo') . "\">
                    </div>";
				}

				if (form_error('ip') == TRUE) {
					echo "<div class=\"form-group has-error\">
                    <label for=\"ip\">Endereço IP</label>
                    <input name=\"ip\" type=\"text\" class=\"form-control\" placeholder=\"Endereço IP\" value=\"" . set_value('ip') . "\">";
					echo form_error('ip');
					echo "</div>";
				} else {
					echo "<div class=\"form-group \">
                    <label for=\"ip\">Endereço IP</label>
                    <input name=\"ip\" type=\"text\" class=\"form-control\" placeholder=\"Endereço IP\" value=\"" . set_value('ip') . "\">
                    </div>";
				}

				if (form_error('mac') == TRUE) {
					echo "<div class=\"form-group has-error\">
                    <label for=\"mac\">Endereço MAC</label>
                    <input name=\"mac\" type=\"text\" class=\"form-control\" placeholder=\"Endereço MAC\" value=\"" . set_value('mac') . "\">";
					echo form_error('mac');
					echo "</div>";
				} else {
					echo "<div class=\"form-group \">
                    <label for=\"mac\">Endereço MAC</label>
                    <input name=\"mac\" type=\"text\" class=\"form-control\" placeholder=\"Endereço MAC\" value=\"" . set_value('mac') . "\">
                    </div>";
				}
			?>
                <div class="form-group">
                	<?php echo form_submit(array('class' => 'btn btn-primary', 'value' => 'Cadastrar Dispositivo', 'name' => 'btn')); ?>
                    
                </div>
            </form>
        </div>
    </div>

</div>
