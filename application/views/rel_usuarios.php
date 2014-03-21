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
        foreach ($lista_usuarios as $linha) {
            echo "<tbody>
                  <tr>
                    <td>" . $linha->id . "</td>
                    <td>" . $linha->nomecompleto . "</td>
                    <td>" . $linha->email . "</td>
                    <td>" . $linha->bloco . "</td>
                    <td>" . $linha->apartamento . "</td>
                    <td>" . $linha->telefone . "</td>
                    <td>" . $linha->username . "</td>
                    <td> - </td>
                  </tr>";
        }
        ?>
        </tbody>
    </table></div>