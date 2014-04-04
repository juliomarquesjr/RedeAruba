<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno; ?></li>

            </ol>
            </div>
            </div>
            
            
<div class="row">
<div class="col-lg-10">
    
    <table class="table table-bordered table-hover tablesorter" id="table" name="table" >
        <thead>
            <tr>
                <th class="header">ID <i class="fa fa-sort"></i></th>
                <th class="header">Nome do Usuario <i class="fa fa-sort"></i></th>
                <th class="header">Email <i class="fa fa-sort"></i></th>
                <th class="header">Bloco <i class="fa fa-sort"></i></th>
                <th class="header">Apartamento <i class="fa fa-sort"></i></th>
                <th class="header">Telefone <i class="fa fa-sort"></i></th>
                <th class="header">Username <i class="fa fa-sort"></i></th>
                <th class="header">Op&ccedil;&otilde;es <i class="fa fa-sort"></i></th>
            </tr>
        </thead>

        <?php
        foreach ($usuarios as $usuario) {
            echo "<tbody>
                  <tr>
                    <td>" . $usuario['id'] . "</td>
                    <td>" . $usuario['nomecompleto'] . "</td>
                    <td>" . $usuario['email'] . "</td>
                    <td>" . $usuario['bloco'] . "</td>
                    <td>" . $usuario['apartamento'] . "</td>
                    <td>" . $usuario['telefone'] . "</td>
                    <td>" . $usuario['username'] . "</td>
                    <td align=\"center\">
                    <a href=\"" . base_url('dashboard/cad_user/' . $usuario['id']) . "\"><i class=\"fa fa-edit\"></i></a>&nbsp;
                    <a href=\"" . base_url('dashboard/apagarUsuario/' . $usuario['id']) . "\"><i class=\"fa fa-trash-o\"></i></a></td>
                  </tr>";
        }
        ?>
        </tbody>
        
    </table>
</div>
</div>
</div>