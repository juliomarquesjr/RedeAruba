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
</div>