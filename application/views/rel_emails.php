 <div id="page-wrapper">
 <div class="row">
        <div class="col-lg-12">
            <h1><?php echo $titulo_interno ?> <small><?php echo $sub_titulo_interno; ?></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i><a href="<?php echo base_url($pg_ini); ?>"> Dashboard</a> / <?php echo $titulo_interno; ?></li>

            </ol>
            </div>
            </div>

<div class="col-lg-10">
    <table class="table table-bordered table-hover tablesorter" id="table" name="table" >
        <thead>
            <tr>
                <th class="header">Remetente <i class="fa fa-sort"></i></th>
                <th class="header">Data <i class="fa fa-sort"></i></th>
                <th class="header">Assunto<i class="fa fa-sort"></i></th>
                <th class="header">Op&ccedil;&otilde;es <i class="fa fa-sort"></i></th>
            </tr>
        </thead>

        <?php
        foreach ($emails as $email) {
            echo "<tbody>
                  <tr>
                    <td>" . $email['nomecompleto'] . "</td>
                    <td>" . $email['data_envio'] ."</td>
                    <td>" . $email['assunto'] . "</td>
                    <td align=\"center\">
                    <a href=\"". base_url('dashboard/abrirEmail/'. $email['id']) ."\"><i class=\"fa fa-file-o\"></i></a>&nbsp 
                    <a href=\"". base_url('dashboard/apagarEmail/'. $email['id']) ."\"> <i class=\"fa fa-trash-o\"></i></td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div></div>