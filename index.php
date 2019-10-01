<?php 
// no codigo so chamanos a função para isso incluimos o corpo
include_once 'util/corpo.php';
cabeca();
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Bem vindo ao sistema de cadastro de Filmes e Series de TV</h4>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Usuario</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $_SESSION ['login']; ?></h3> <!-- função echo para exibir o texto que contem em uma variavel   -->
                            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>  
                        <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small><strong>Idade:</strong> <?php echo $_SESSION ['idade']; ?> Anos</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Numeros de Filmes </p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">0</h3>
                            <i class="ti-archive icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Serie de TV</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">0</h3>
                            <i class="ti-tablet icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>  
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Filmes Recentes</p>
                        <p class="text-success font-weight-light">Veja aqui os ultimos 10 Filmes adicionados.</p>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>

                    </div>

                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card border-bottom-0">
                    <div class="card-body pb-0">
                        <p class="card-title">Series Recentes</p>
                        <p class="text-success font-weight-light">Veja aqui os ultimas 10 Series adicionadas.</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="mr-5 mt-3">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
              

            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                            <p class="card-title">Relação Quantidade Filmes X Series</p>
                            <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                                    <div class="ml-xl-4">
                                        <h1>33500</h1>
                                        <h3 class="font-weight-light mb-xl-4">Sales</h3>
                                        <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                                    </div>  
                                </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="row">
                                        <div class="col-md-6 mt-3 col-xl-5">
                                            <canvas id="north-america-chart"></canvas>
                                            <div id="north-america-legend"></div>
                                        </div>
                                        <div class="col-md-6 col-xl-7">
                                            <div class="table-responsive mb-3 mb-md-0">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


        <?php        rodape();?>