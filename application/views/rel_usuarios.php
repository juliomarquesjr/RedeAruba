<div class="col-lg-10">
    <h2>Rela&ccedil;&atilde;o de Usu&aacute;rios</h2>
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
                    <td>" . $usuario['id']. "</td>
                    <td>" . $usuario['nomecompleto'] . "</td>
                    <td>" . $usuario['email']. "</td>
                    <td>" . $usuario['bloco'] . "</td>
                    <td>" . $usuario['apartamento'] . "</td>
                    <td>" . $usuario['telefone'] . "</td>
                    <td>" . $usuario['username'] . "</td>
                    <td> - </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>