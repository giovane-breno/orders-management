<?php
use src\Models\Orders;

$sqlQuery = 'SELECT * FROM orders;';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Pedidos</title>
</head>

<body>
    <div class="container mt-5 mx-auto ">
        <div class="row">
            <div class="col grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3">Cadastro de Pedidos
                            <a type="button" class="btn btn-success btnAdd float-right" data-toggle="modal"
                                data-target="#newOrderModal"><i class="fa fa-plus"></i> Novo Pedido</a>
                        </h4>
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope=" col">#</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Vendedor</th>
                                        <th scope="col">Data da Venda</th>
                                        <th scope="col">Ações</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($db->query($sqlQuery) as $row) {
                                        echo "<tr>" .
                                            "<td>" . $row["id"] . "</td>" .
                                            "<td>" . $row["customer"] . "</td>" .
                                            "<td>" . $row["seller"] . "</td>" .
                                            "<td> <span class='badge badge-success'>" . $row["created_at"] . "</span></td>" .
                                            "<td>
                            <a type='button' id='detailButton' class='btn btn-primary' data-id=" . $row["id"] . "><i class='fa fa-eye'></i></a> 
                            <a type='button' id='deleteButton' class='btn btn-danger' data-id=" . $row["id"] . "><i class='fa fa-trash'></i></a>
                            </td>" .
                                            "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Order Modal -->
    <div class="modal fade" id="newOrderModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Dados da Venda</h5>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input class='form-control' type="text" placeholder="Cliente">
                        </div>
                        <div class="col-6 mb-3">
                            <input class='form-control' type="text" placeholder="Vendedor">
                        </div>
                        <div class="col-12 mb-3">
                            <input class="form-control" type="date" placeholder="Data de Venda">
                        </div>
                    </div>
                    <hr/>
                    <h5>Dados do Produto</h5>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input class='form-control' type="text" placeholder="Nome do Produto">
                        </div>
                        <div class="col-6 mb-3">
                            <input class='form-control' type="text" placeholder="Valor do Produto">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Delete Order Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deletar Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    Você realmente deseja deletar esse pedido?<br> Essa ação é irreversível!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Detail Order Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ver Detalhes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    Você realmente deseja deletar esse pedido?<br> Essa ação é irreversível!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Deletar</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

<script>
    $('#deleteButton').click(function (e) {
        $('#deleteModal').modal("show");
    });

    $('#detailButton').click(function (e) {
        $('#detailModal').modal("show");
    });
</script>

</html>