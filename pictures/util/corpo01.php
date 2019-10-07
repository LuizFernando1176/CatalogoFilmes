<?php

include_once 'config.php';
testaSessao();
$usuarioLogado = json_decode($_SESSION["gmUsuarioLogado"], true);

function cabeca() {


    echo '
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistema de Filmes e Serie</title>
        <link rel="stylesheet" href="' . urlbase() . '/css/themify-icons.css">
        <link rel="stylesheet" href="' . urlbase() . '/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="' . urlbase() . '/css/style.css">
        <link rel="shortcut icon" href="' . urlbase() . '/img/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="' . urlbase() . '/index.php"><img src="' . urlbase() . '/img/logo.svg" class="mr-2" alt="logo"/></a>
                    <a class="navbar-brand brand-logo-mini" href="' . urlbase() . '/index.php"><img src="' . urlbase() . '/img/logo-mini.svg" alt="logo"/></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="ti-view-list"></span>
                    </button>
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                    <span class="input-group-text" id="search">
                                        <i class="ti-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="navbar-search-input" placeholder="Buscar Filmes ou Serie" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                                            <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <button class="ti-menu btn btn-dark"> Menu</button>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="' . urlbase() . '/sair.php">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="ti-view-list"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="' . urlbase() . '/index.php">
                                <i class="ti-shield menu-icon"></i>
                                <span class="menu-title">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="' . urlbase() . '/pictures/perfil.php">
                                <i class="ti-user menu-icon"></i>
                                <span class="menu-title">Perfil</span>
                            </a>
                        </li>
                    </ul>
                </nav>';
}

function rodape() {

    echo '  <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="login.php" target="_blank">Sistema de Cadastro de Filmes </a>. Todos direitos Garantidos.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">NandoFlix <i class="ti-heart text-danger ml-1"></i></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <script src="' . urlbase() . '/js/vendor.bundle.base.js"></script>
        <script src="' . urlbase() . '/js/Chart.min.js"></script>
        <script src="' . urlbase() . '/js/off-canvas.js"></script>
        <script src="' . urlbase() . '/js/hoverable-collapse.js"></script>
        <script src="' . urlbase() . '/js/template.js"></script>
        <script src="' . urlbase() . '/js/todolist.js"></script>
        <script src="' . urlbase() . '/js/dashboard.js"></script>

    </body>

</html>

';
}
