<?php
// no codigo so chamanos a função para isso incluimos o corpo
include_once 'util/corpo01.php';
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
            <div class="col-md-6 grid-margin stretch-card">
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
        </div>
        <div class="row">
            
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> <strong><center> Faça o Upload de sua Imagem!!</center></strong></div>
                    </div>
                    <center>
                        <form method="post" enctype="multipart/form-data" action="util/enviarArquivo.php" style="padding: 1%;">
                            <strong> Selecione uma imagem ( Poster ): </strong><input name="arquivo" type="file" class="form-control-file" />
                            <br />
                            <strong>Selecione uma imagem ( Img 01 ): </strong><input name="img01" type="file" class="form-control-file" />
                            <br />
                            <strong>Selecione uma imagem ( Img02 ):</strong> <input name="img02" type="file" class="form-control-file" />
                            <br />
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-danger">Apagar</button>
                        </form>
                    </center>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->


        <?php rodape(); ?>