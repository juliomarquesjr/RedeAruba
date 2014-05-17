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
            <a class="navbar-brand" href= "<?php echo base_url($pg_ini); ?>"  >Rede Aruba - Adminitra&ccedil;&atilde;o do Servidor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li><a href="<?php echo base_url($pg_ini); ?>" ><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; Usu&aacute;rios <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url($pg_cad_usr); ?> ">Incluir usu&aacute;rio</a></li>
                        <li><a href="<?php echo base_url($pg_user_cadastrados); ?>">Rela&ccedil;&atilde;o de usu&aacute;rios</a></li>
                        <li><a href="<?php echo base_url($pg_enviar_msg); ?>">Enviar mensagem</a></li>
                        <li><a href="<?php echo base_url($pg_caixa_entrada); ?>"> Caixa de entrada</a></li>
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
                        <li><a href="<?php echo base_url($pg_envia_cobranca); ?>">Enviar cobrança </a></li>
                        <li><a href="<?php echo base_url($pg_deb_cobranca);?>">Debitar pagamento </a></li>
                        <li><a href="#">Rela&ccedil;&atilde;o de pagamentos</a></li>;
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-wrench"></i>&nbsp; Ferramentas</a></li>   
            </ul>

            <ul class="nav navbar-nav navbar-right navbar-user">
                <li class="dropdown messages-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Mensagens <?php
					if ($novas_mensagens > 0) { echo "<span class=\"badge\">" . $novas_mensagens . "</span>";
					}
				?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header"><?php echo $novas_mensagens; ?> Nova(s) Mensagen(s)</li>
                                                
                        <?php
                        if ($mensagens_menu)
                        foreach ($mensagens_menu as $item_msg) {
                        	echo "<li class=\"divider\"></li>
								<li class=\"message-preview\">
								<a href=\"" . base_url('dashboard/abrirEmail/' . $item_msg['id']) . "\">
								<span class=\"avatar\"><img src=\"" . base_url('assets/img/email2.png') . "\"></span>
								<span class=\"name\">" . $item_msg['nomecompleto'] . "</span>
								<span class=\"message\">" . $item_msg['assunto'] . "</span>
								<span class=\"time\"><i class=\"fa fa-clock-o\"></i>" . $item_msg['data_envio'] . "</span>
								</a>
                        		</li>";
														}
                            ?>

                        <li class="divider"></li>
                        <li><a href="<?php echo base_url($pg_caixa_entrada); ?>">Ver todoas <?php
						if ($novas_mensagens > 0) { echo "<span class=\"badge\">" . $novas_mensagens . "</span>";
						}
						?></a></li>
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
                    	<?php $var = $this -> session -> userdata['usuarioLogado'];
						$usuario = $var['nomecompleto'];
						echo $usuario;
					 ?> &nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user"></i>&nbsp; Perfil</a></li>
                        <li><a href="<?php echo base_url($pg_caixa_entrada); ?>"><i class="fa fa-envelope"></i>&nbsp; Caixa de Entrada <?php
						if ($novas_mensagens > 0) { echo "<span class=\"badge\">" . $novas_mensagens . "</span>";
						}
						?></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url($pg_sair)?>"><i class="fa fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

