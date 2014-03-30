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
                <th class="header">Dispositivo <i class="fa fa-sort"></i></th>
                <th class="header">Proprietario <i class="fa fa-sort"></i></th>
                <th class="header">Endereço IP <i class="fa fa-sort"></i></th>
                <th class="header">Endereço MAC <i class="fa fa-sort"></i></th>
                <th class="header">Op&ccedil;&otilde;es <i class="fa fa-sort"></i></th>
            </tr>
        </thead>

        <?php
        foreach ($dispositivos as $dispositivo) {
            echo "<tbody>
                  <tr>
                    <td>" . $dispositivo['nomedispositivo'] . "</td>
                    <td>" . $dispositivo['nomecompleto'] ."</td>
                    <td>" . $dispositivo['ip'] . "</td>
                    <td>" . $dispositivo['mac'] . "</td>
                    <td>-</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>