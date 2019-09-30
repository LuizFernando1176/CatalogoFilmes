<?php ?>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Catalogo de Filmes | Login </title>
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/vendor.bundle.base.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.png" />
    </head>
    <body >
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                    <div class="row flex-grow">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center" style="background-color: black ; color: white">
                            <div class="auth-form-transparent text-left p-3 ">
                               <center> <div class="brand-logo">
                                    <img src="img/logo.svg" alt="logo">
                                </div>
                                  <h4>Seja Bem Vindo!</h4>
                                    <h6 class="font-weight-light">Estamos Feliz de ver você novamente!</h6></center>
                                    <form class="pt-3" method="POST" action="inserir/validaLogin.php">
                                    <div class="form-group">
                                        <label for="login">Usuario</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="ti-user text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="text"  name="login" class="form-control form-control-lg border-left-0" id="login" placeholder="Usuario">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <span class="input-group-text bg-transparent border-right-0">
                                                    <i class="ti-lock text-primary"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control form-control-lg border-left-0" id="senha" name="senha" placeholder="********">                        
                                        </div>
                                    </div>
                                    <div class="my-2 d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <label class="form-check-label text-muted">
                                                <input type="checkbox" class="form-check-input">
                                                Mante-se Logado?
                                            </label>
                                        </div>
                                        <a href="#" class="auth-link text-black">Esqueceu a Senha?</a>
                                    </div>
                                    <div class="my-3">
                                        <button class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn" type="submit">Logar</button>
                                    </div>
                                    <div class="text-center mt-4 font-weight-light">
                                        Deseja criar uma conta? <a href="cadastros/cadastrarUsuario.php" class="text-primary">Criar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 login-half-bg d-flex flex-row">
                            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2019  Todos direitos resevados.</p>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <script src="js/vendor.bundle.base.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <script src="js/todolist.js"></script>
        <script src="js/dashboard.js"></script>

    </body>

</html>

