<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>index</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/dashboard-styles.css">

    <!-- Font Awesome JS -->
    <script defer src="public/fontawesome-free-5.9.0-web/js/all.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

</head>

<body>
    <div class="wrapper">

        <!-- Page Content  -->
        <div id="content">
            <div class="row">

                <!-- Primeiro Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Coleiras
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">BRL R$400,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segundo Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vacinas
                                        Aplicadas</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">BRL R$1,00</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Terceiro Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ração Comida
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30%</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quarto Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Terapia com
                                        Gatos</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">1528</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Primeiro Gráfico -->
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card text-black bg-light mb-3">
                        <div class="card-header texto-card">Pessoas com Raiva</div>
                        <div class="card-body card-teste">
                            <img src="assets/img/grafico1.png" class="img-card" alt="">

                        </div>
                    </div>
                </div>

                <!-- Segundo Gráfico -->
                <div class="col-md-4 ">
                    <div class="card text-black bg-light mb-3">
                        <div class="card-header texto-card">Cachorros Felizes</div>
                        <div class="card-body card-teste">
                            <img src="assets/img/grafico2.png" class="img-card" alt="">
                        </div>
                    </div>
                </div>

                <!-- Terceiro Gráfico -->
                <div class="col-md-4 ">
                    <div class="card text-black bg-light mb-3">
                        <div class="card-header texto-card">Cirurgias Equinas</div>
                        <div class="card-body card-teste">
                            <img src="assets/img/grafico3.png" class="img-card" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 text-black">Uma incrível nota</h5>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo beatae aperiam optio officiis
                    perspiciatis laborum error iure nisi. Animi accusamus aliquid ducimus omnis accusantium quidem
                    nesciunt vitae qui delectus repellat?
                    <br><br><button type="button" class="btn btn-secondary">Leia mais...</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>