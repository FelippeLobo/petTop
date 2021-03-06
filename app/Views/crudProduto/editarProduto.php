<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="app/Views/crudProduto/assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/cssProduto/styles.css">

    <title>Editar Produto</title>
  </head>
  <body>
    <div class="container centralizar-add-edit">
            <h1 class="title page-header">Editar Produto</h1>
            <form action="editarProduto/editando?id=<?=$produtoId?>" method="post">
                <div class="row">    
                    <div class="form-group col">
                          <label for="exampleFormControlInput1">Nome</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Produto" name="nome" value="<?=$produto[0]->nome?>" required>
                    </div>
                    <div class="form-group col">
                        <label for="exampleFormControlInput1">Preço</label>
                        <input type="number" step="0.01" min="0" class="form-control" id="exampleFormControlInput1" placeholder="Preço do Produto" name="preco" value="<?=$produto[0]->preco?>" required>
                    </div>
                </div>
                <div class="form-group">
                      <label for="exampleFormControlSelect1">Categoria</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="id_categoria" required>
                        <?php foreach($categorias as $categoria): ?>
                          <?php if($categoria->id == $produto[0]->id_categoria): ?>
                            <option value="<?=$categoria->id?>" selected><?=$categoria->nome?></option>
                          <?php else: ?>
                            <option value="<?=$categoria->id?>"><?=$categoria->nome?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>  
                      </select>
                </div>
                <div class="form-group">
                      <label for="exampleFormControlTextarea1">Descrição</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"><?=$produto[0]->descricao?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Confirmar</button>
                <a class="btn btn-danger" href="Produtos" role="button">Cancelar</a>
            </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>