<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="public/cssLayout/styles.css">

    <!-- Font Awesome JS -->
    <script defer src="public/fontawesome-free-5.9.0-web/js/all.js"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-outline dark btn-lg normal-navbar">
                    <span class="sidebarheader titulo">PET TOP</span>
                </button>
                <strong>
                    <button type="button" id="sidebarUnCollapse" class="btn btn-outline dark small-navbar">
                        <i class="fas fa-bone sidebarheader"></i>
                    </button>
                </strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/PetTop/dashBoard">
                        <i class="fas fa-home"></i>
                        <div class="icon-legend">DashBoard</div>
                    </a>
                </li>
                <li>
                    <a href="/PetTop/Clientes">
                    <i class="fas fa-address-card"></i></i>
                        <div class ="icon-legend">Clientes</div>
                    </a>
                    <a href="/PetTop/Setores">
                    <i class="fas fa-door-open"></i></i>
                        <div class="icon-legend">Setores</div>
                    </a>
                    
                </li>
                <li>
                    <a href="/PetTop/Produtos">
                    <i class="fas fa-boxes"></i></i>
                        <div class="icon-legend">Produtos</div>
                    </a>
                </li>
                <li>
                    <a href="/PetTop/Categorias">
                    <i class="fas fa-clipboard-list"></i></i>
                        <div class = "icon-legend">Categorias</div>
                    </a>
                </li>
                <li>
                    <a href="/PetTop/Vendas">
                        <i class="fas fa-money-check-alt"></i></i>
                        <div class="icon-legend">Vendas</div>
                    </a>
                </li>
                <li>
                    <a href="/PetTop/Usuarios">
                        <i class="fas fa-users"></i></i>
                        <div class="icon-legend">Usuários</div>
                    </a>
                </li>
                <li>
                    <a href="/PetTop/Cargos">
                    <i class="fas fa-file-invoice-dollar"></i></i>
                        <div class="icon-legend">Cargos</div>
                    </a>
                </li>
            </ul>

            
        </nav>

        

        <!-- Page Content  -->
        <div id="content">    
                <nav class="navbar navbar-light bg-light nav-hello-user">
                        <span class="navbar-text">
                        
                        Olá, <?php echo $_SESSION['nome'];?>
                        </span>
                        <form action="logout">
                        <button type="submit" class="btn btn-light">Sair <i class="fas fa-sign-out-alt"></i></button>
                        </form> 
                </nav>
                <?php require Roteador::carregar('app/rotas.php')->direcionarView(Requisicao::uri()); ?>
    
        </div>
        
    </div>

    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="public/jQueryPopper/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.JS -->
    <script src="public/jQueryPopper/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        $(document).ready(function () {
            $('#sidebarUnCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>