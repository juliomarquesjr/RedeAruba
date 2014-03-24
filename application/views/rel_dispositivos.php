<div class="col-lg-10">
    <h2>Rela&ccedil;&atilde;o de Dispositivos</h2>
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
                    <td>" . $dispositivo['nomedispositivo']. "</td>
                    <td>". $dispositivo['nomecompleto']."</td>
                    <td>" . $dispositivo['ip'] . "</td>
                    <td>" . $dispositivo['mac'] . "</td>
                    <td>-</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>