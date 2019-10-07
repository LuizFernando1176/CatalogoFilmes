<?php
// no codigo so chamanos a função para isso incluimos o corpo
include_once 'util/corpo01.php';
include_once 'util/conectarBD.php';
cabeca();
$conn= conectar();
$buscarURL ="SELECT * FROM `urlsistema` ";
$resultadoURL = mysqli_query($conn, $buscarURL); 
$reultadosURL = mysqli_fetch_assoc($resultadoURL);
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
                        <p class="card-title">Mudar a Url do Sistema</p>
                        <p class="text-danger font-weight-light">Ao atualizar este campo você , vai mudar todas URL de suas imagens.</p>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2">
                            <form class="form-check-inline" action="util/mudaUrl.php" method="POST">
                                <label><strong>Url Sistema</strong>:</label><input type="text" id="url" name="url" value="<?php echo $reultadosURL['url'] ?>" class="form-control "> <button class="btn btn-danger px-3 ml-1">Atualizar</button>
                            </form>
                        </div>

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

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->


            <?php rodape(); ?>