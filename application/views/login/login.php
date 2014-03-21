<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>
        <link rel="icon" type="image/png" href="<?php echo base_url('icon.ico'); ?>">
        <link href="<?php echo base_url('assets/css/bootstrap.css"'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/sb-admin.css?'); ?>" rel="stylesheet">   
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    </head>

    <body background="<?php echo base_url('assets/img/fundo_login.png'); ?>" >


        <div class="col-md-5 col-md-offset-2">
            <div class="jumbotron">
                <h1><i class="fa fa-desktop"></i> &nbsp;Aruba Server</h1>
                <p>Servidor de Rede e Internet. <br />
                    O Acesso ao sistem é restrito. Por favor efetue login.
                </p><br />
               
            </div>     

        </div>
        <div class="col-md-3">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Informações</h4>
                </div>
                <div class="modal-body">

                    <?php
                    if ($this->session->flashdata('erroLogin') == TRUE) {
                        echo "<div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <strong>Erro!</strong> Usuário ou Senha inválidos.
                </div>";
                    }

                    echo form_open('login/verifica', 'role="form"');

                    if (form_error('usuario') == TRUE) {
                        echo "<div class=\"form-group has-error\"><label>Nome de Usuario</label>";
                        echo form_input(array('name' => 'usuario', 'class' => 'form-control', 'placeholder' => 'Nome de Usuário'), set_value('usuario'));
                        echo form_error('usuario');
                        echo "</div>";
                    } else {
                        echo "<div class=\"form-group\"><label>Nome de Usuario</label>";
                        echo form_input(array('name' => 'usuario', 'class' => 'form-control', 'placeholder' => 'Nome de Usuário'), set_value('usuario'));
                        echo "</div>";
                    }

                    if (form_error('senha') == TRUE) {
                        echo "<div class=\"form-group has-error\"><label>Senha</label>";
                        echo form_password(array('name' => 'senha', 'class' => 'form-control'), '');
                        echo form_error('senha');
                        echo "</div>";
                    } else {
                        echo "<div class=\"form-group\"><label>Senha</label>";
                        echo form_password(array('name' => 'senha', 'class' => 'form-control', 'placeholder' => 'Senha'), '');
                        echo "</div>";
                    }

                    echo "<div class=\"modal-footer\">" .
                    form_submit(array('name' => 'enviar', 'value' => 'Entrar', 'class' => 'btn btn-primary')) .
                    form_close();
                    "</div>";
                    ?>
                </div>
            </div>
        </div>





