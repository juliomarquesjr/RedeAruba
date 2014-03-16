<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>
        <link rel="icon" type="image/png" href="<?php echo base_url('icon.ico'); ?>">
        <link href="<?php echo base_url('assets/css/bootstrap.css"'); ?> rel="stylesheet">
              <link href="<?php echo base_url('assets/css/sb-admin.css?'); ?>" rel="stylesheet">   
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    </head>

    <body background="<?php echo base_url('assets/img/fundo_login.png'); ?>" >

        <!-- Jumbotron inicial-->
        <div class="col-md-6 col-md-offset-3">
            <div class="jumbotron">
                <h1><i class="fa fa-desktop"></i> &nbsp;Aruba Server</h1>
                <p>Servidor de Rede e Internet. <br />
                    O Acesso ao sistem é restrito. Por favor efetue login.
                </p><br />
                <p><a class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#loginModal">Entrar no Sistema</a></p>
            </div>
        </div>


        <!-- Janela de Login -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Acesso ao Sistema</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                        <a role="button" class="btn btn-primary" href="<?php echo base_url('dashboard');?>">Login</a>
                    </div>
                </div>
            </div>
        </div>