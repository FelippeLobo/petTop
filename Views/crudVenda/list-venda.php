<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css-cargo/style-cargo.css">
    <title>Lista cargo</title>
  </head>
  <body>
    <div class="container cont-lista">
      <div class="form-row buttonadd">
        <h1>Vendas</h1>
        <a href="add-venda.html"><button type="button" class="btn btn-primary">+ Adicionar uma venda</button></a>
      </div>
      <table class="table table-striped lista-in">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Produto</th>
              <th scope="col">Cliente</th>
              <th scope="col">Data</th>
              <th scope="col" class="action"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>XX</td>
              <td>Coleira</td>
              <td>Maria</td>
              <td>01/09/2006</td>
              <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable">Visualizar</button>
                <a href="edit-venda.html"><button type="button" class="btn btn-warning">Editar</button></a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Excluir</button></td>
            </tr>
            <tr>
              <td>XX</td>
              <td>Ração</td>
              <td>GAbsfd</td>
              <td>18/48/2920</td>
              <td class="action"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable">Visualizar</button>
                <a href="edit-venda.html"><button type="button" class="btn btn-warning">Editar</button></a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Excluir</button></td>
            </tr>
            <tr>
              <td>XX</td>
              <td>Larry</td>
              <td>the Bird</td>
              <td>15/98/6206</td>
              <td class="action"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalScrollable">Visualizar</button>
                <a href="edit-venda.html"><button type="button" class="btn btn-warning">Editar</button></a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Excluir</button></td>
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

    <!-- Modal excluir -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deseja excluir essa venda?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Excluir</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal vizualizar -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Cliente XX</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Cliente:</h4>
            <h4>Produto:</h4>
            <h4>Desconto:</h4>
            <h4>Quantidade:</h4>
            <h4>Data:</h4>
            <h4>Observações:</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  </body>
</html>