<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno; ?></li>

            </ol>
            
            	<?php echo form_open("dashboard/cad_dispositivos", 'role =\"form\" ');

				echo "<div class=\"form-group\">" . "<label for=\"userativo\">Selecione o Destinat&aacute;rio</label>" . "<fieldset id=\"ativo\"> " . "<select class=\"form-control\" name=\"usuario\">";

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
                    <label for=\"ip\">Nome do dispositivo</label>
                    <input name=\"ip\" type=\"text\" class=\"form-control\" placeholder=\"Endereço IP\" value=\"" . set_value('ip') . "\">";
					echo form_error('nomedispositivo');
					echo "</div>";
				} else {
					echo "<div class=\"form-group \">
                    <label for=\"ip\">Nome do dispositivo</label>
                    <input name=\"ip\" type=\"text\" class=\"form-control\" placeholder=\"Endereço IP\" value=\"" . set_value('ip') . "\">
                    </div>";
				}
				?>
				
                <div class="form-group">
                    <label for="assunto">Endere&ccedil;o MAC</label>
                    <input type="text" class="form-control" placeholder="Endereço MAC" id="mac">
                </div>
                <div class="form-group">
                    <label for="email">Descri&ccedil;&atilde;o do dispositivo</label>
                    <textarea type="text" rows="8" class="form-control" placeholder="Escreva uma breve descrição do seu dispositivo..." id="descricao"></textarea>
                </div>

                <div class="form-group">
                	<?php echo form_submit(array('class' => 'btn btn-primary', 'value' => 'Cadastrar Dispositivo', 'name' => 'btn')); ?>
                    
                </div>
            </form>
        </div>
    </div>

</div>
