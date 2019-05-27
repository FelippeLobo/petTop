<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="sidebarStyle.css">
        <link rel="stylesheet" href="styleClientes.css">
        <link rel="stylesheet" href="StyleCliente.js">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
    
        <script defer src="fontawesome-free-5.8.1-web/js/solid.js"> </script>
        <script defer src="fontawesome-free-5.8.1-web/css/all.css"> </script>

     
    <title>Cria Cliente</title>
</head>


<body>
    

            <div class="container">
                <h1 class="page-header cabeçalho">Criar Cliente</h1>
                <form>
                        <div class="form-row">
                            <div class="form-group col-md-3 col-6">
                                <label >Setor</label>
                                <select  class="form-control">
                                    <option selected>Escolha o Setor ...</option>
                                    <option>Setor 1</option>
                                    <option>Setor 2</option>
                                    <option>Setor 3</option>
                                    <option>Setor 4</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row">
            
                            <div class="form-group col-md-6 col-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-6 col-6">
                                <label for="inputPassword4">Sobrenome</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">E-mail</label>
                                <input type="email" class="form-control" id="inputAddress2" placeholder="">
                            </div> 
                            
                            <div class="form-group col-md-6">
                                <label for="inputAddress">CPF</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label for="inputCity">Rua</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>

                            <div class="form-group col-md-4 col-6">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-2 col-6">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Escolha ...</option>
                                    <option>AC</option>
                                    <option>AL</option>
                                    <option>AP</option>
                                    <option>AM</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>MG</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PR</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>RJ</option>
                                    <option>RN</option>
                                    <option>RS</option>
                                    <option>RO</option>
                                    <option>RR</option>
                                    <option>SC</option>
                                    <option>SP</option>
                                    <option>TO</option>
                                </select>
                            </div>
                           
                          

                        </div>
            
                        
                        
                        <div class="form-row">
                            <div class="form-group col-md-4 col-8">
                                <label for="inputState">Bairro</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                
                            </div>

                            <div class="form-group col-md-2 col-4">
                                <label for="inputZip">Número</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                           
                            
                        </div>

                        <div class="form-row">
            
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Anotações</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
            
                        </div>
            
                       
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                        <a href="CrudCliente.html" class="btn btn-danger">Cancelar</a>
                    </form>
            
                </div>
            

            </div>

        </div>

    </div>

  
 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
 crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
 integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
 crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
 integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
 crossorigin="anonymous"></script>


</body>

</html>