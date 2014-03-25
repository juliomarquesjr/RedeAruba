<div class="col-lg-10">
    <h2>Caixa de Entrada</h2>
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
        foreach ($dispositivos as $dispositivo) {
            echo "<tbody>
                  <tr>
                    <td>" . $dispositivo['nomedispositivo'] . "</td>
                    <td>" . $dispositivo['nomecompleto'] ."</td>
                    <td>" . $dispositivo['ip'] . "</td>
                    <td> - </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>