<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Usuário Específico</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"
        integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css-venda/style-venda.css">
</head>

<body>

    <!-- Page Content  -->
    <div class="container">
        <div class="row title">
            <h1 class="col">Usuários</h1>
            <a class="btn btn-primary col-sm-3" href="cria_usuario.html"><i class="fas fa-plus"></i> Adicionar Novo
                Usuário </a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th class="actions" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Frank</td>
                    <td>frank@example.com</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#productModal">
                            Visualizar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="productModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Usuário 1</h5>
                                    </div>
                                    <div class="modal-body">
                                        ID: <br>
                                        Nome: <br>
                                        Email: <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-warning btn-sm" href="edita_usuario.html" role="button">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#modalForExclusions">
                            Excluir
                        </button>

                        <div class="modal fade" id="modalForExclusions" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Excluir Usuário?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Esse é um processo irreversível!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Não</button>
                                        <button type="button" class="btn btn-danger">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Janet</td>
                    <td>janet@example.com</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#productModal2">
                            Visualizar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="productModal2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Usuário 2</h5>
                                    </div>
                                    <div class="modal-body">
                                        ID: <br>
                                        Nome: <br>
                                        Email: <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-warning btn-sm" href="edita_usuario.html" role="button">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#modalForExclusions">
                            Excluir
                        </button>

                        <div class="modal fade" id="modalForExclusions" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Excluir Usuário 3?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Esse é um processo irreversível!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Não</button>
                                        <button type="button" class="btn btn-danger">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Dr. Scott</td>
                    <td>drscott@example.com</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#productModal3">
                            Visualizar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="productModal3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Usuário 3</h5>
                                    </div>
                                    <div class="modal-body">
                                        ID: <br>
                                        Nome: <br>
                                        Email: <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-warning btn-sm" href="edita_usuario.html" role="button">Editar</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#modalForExclusions">
                            Excluir
                        </button>
                        <div class="modal fade" id="modalForExclusions" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Excluir Usuário 3?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Esse é um processo irreversível!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Não</button>
                                        <button type="button" class="btn btn-danger">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>

</html>