<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno; ?></li>

            </ol>
            <?php echo form_open('dashboard/enviar_msg'); 
            
            if($this->session->flashdata('insereOK') == TRUE):
            echo "<div class=\"alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Sucesso!</strong> Mensagem enviada com sucesso.
                </div>";
            endif;
            ?>

            <div class="form-group">
                <label for="userativo">Selecione o Destinat&aacute;rio</label>
                <fieldset id="ativo">
                    <select class="form-control" name="usuario">
                        <?php
                        foreach ($lista_usuarios as $linha) {
                            echo "<option value=\"" . $linha->id . "\">" . $linha->nomecompleto . "</option>";
                        }
                        ?>         
                    </select>
                </fieldset>
            </div>
            <?php
            if (form_error('assunto') == TRUE) {
                echo "<div class=\"form-group has-error\">
                <label for=\"assunto\">Assunto</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Assunto\" name=\"assunto\" id=\assunto\" value=\"" . set_value('assunto') . "\">";
                echo form_error('assunto');
                echo "</div>";
            } else {
                echo "<div class=\"form-group\">
                <label for=\"assunto\">Assunto</label>
                <input type=\"text\" class=\"form-control\" placeholder=\"Assunto\" name=\"assunto\" id=\assunto\" value=\"" . set_value('assunto') . "\">
            </div>";
            }

            if (form_error('msg') == TRUE) {
                echo "<div class=\"form-group has-error\">
                <label for=\"email\">Mensagem</label>
                <textarea type=\"text\" rows=\"8\" class=\"form-control\" placeholder=\"Digite aqui a sua mensagem...\" name=\"msg\"  value=\"" . set_value('msg') . "\"></textarea>";
                echo form_error('msg');
                echo "</div>";
            } else {
                echo "<div class=\"form-group\">
                <label for=\"email\">Mensagem</label>
                <textarea type=\"text\" rows=\"8\" class=\"form-control\" placeholder=\"Digite aqui a sua mensagem...\" name=\"msg\" value=\"" . set_value('msg') . "\"></textarea>";
                echo "</div>";
            }
            ?>



            <div class="form-group">
                <button type="submit" class="btn btn-primary" >Enviar Mensagem</button>
            </div>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div><!-- /#page-wrapper -->
