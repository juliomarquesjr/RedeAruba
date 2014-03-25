<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href= "<?php echo base_url($pg_ini);?>"  >Rede Aruba - Adminitra&ccedil;&atilde;o do Servidor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><a href="<?php echo base_url($pg_ini);?>" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Usu&aacute;rios <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href=" <?php echo base_url($pg_cad_usr); ?> ">Incluir usu&aacute;rio</a></li>
                        <li><a href="<?php echo base_url($pg_user_cadastrados); ?>">Rela&ccedil;&atilde;o de usu&aacute;rios</a></li>
                        <li><a href="<?php echo base_url($pg_enviar_msg); ?>">Enviar mensagem</a></li>
                        <li><a href="#"><i class="icon-inbox"></i> Caixa de entrada</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i>&nbsp; Dipositivos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url($pg_cad_dispositivos); ?>">Incluir dispositivo </a></li>
                        <li><a href="<?php echo base_url($pg_rel_dispositivos); ?>">Dispositivos cadastrados</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i>&nbsp; Pagamentos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url($pg_envia_cobranca);?>">Enviar cobrança </a></li>
                        <li><a href="#">Debitar pagamento </a></li>
                        <li><a href="#">Rela&ccedil;&atilde;o de pagamentos</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-wrench"></i>&nbsp; Ferramentas</a></li>   
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown messages-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensagens <span class="badge">7</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">7 New Messages</li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">John Smith:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">John Smith:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-preview">
                            <a href="#">
                                <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                <span class="name">John Smith:</span>
                                <span class="message">Hey there, I wanted to ask you something...</span>
                                <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">View Inbox <span class="badge">7</span></a></li>
                    </ul>
                </li>
                <li class="dropdown alerts-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Avisos <span class="badge">3</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                        <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                        <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                        <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                        <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                        <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </li>
                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; 
                    	<?php $var = $this->session->userdata['usuarioLogado'];
						$usuario = $var['nomecompleto'];
						echo $usuario;
					 ?> &nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i>&nbsp; Perfil</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i>&nbsp; Caixa de Entrada <span class="badge">7</span></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url($pg_sair)?>"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

