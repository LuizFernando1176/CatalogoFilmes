<?php
include_once '../util/corpo.php';
include_once '../util/conectarBD.php';
//include_once 'search.php';
include_once '../util/config.php';
include_once '../select/selects.php';
cabeca();


//$queryBuscaCategoria =;
?>
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
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Usuario</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $_SESSION ['login']; ?></h3>
                            <!-- função echo para exibir o texto que contem em uma variavel   -->
                            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-danger"><span class="text-black ml-1"><small><strong>Idade:</strong> <?php echo $_SESSION ['idade']; ?> Anos</small></span></p>
                    </div>
                </div>
            </div></div>
        <div class="row col-md-12">
            <div class="card">
                <div class="card-body">
                    <center> <h2 class="card-title">Cadastro de Filmes</h2></center>
                    <form class="form-sample" method="POST" action="../inserir/inserirFilme.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nome do Filme:</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="nome_filme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nome Original:</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="nome_original">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Classificação:</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="classificacao">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">IMDB:</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="imdb">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Lancamento:</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="lancamento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Categoria:</label>
                                    <div class="col-sm-9">
                                        <?php echo selectCategoria(); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- jQuery library -->
                            <script src="../js/jquery.min.js"></script>
                            <script src="../js/jquery.smin.js"></script>
                            <!-- Tokeninput plugin library -->
                            <script src="../js/jquery.tokeninput.js"></script>
                            <link rel="stylesheet" href="../css/token-input.css" />
                            <script>
                                $(document).ready(function () {
                                    $("#ator").tokenInput("search.php", {
                                        deleteText: "&times;",
                                        minChars: 1,
                                        propertyToSearch: "ator",
                                        hintText: "Procure o Ator...",
                                        noResultsText: "Ator não encontrado.",
                                        searchingText: "Procurando..."
                                    });
                                });
                            </script>
                            <div class="col-md-8">
                                <div class="form-group row">

                                    <label class="col-sm-3 col-form-label">Ator:</label> 

                                    <div class="col-sm-8">
                                        <input id="ator"  name="ator"/> 
                                    </div><button type="button" title="Adicionar Ator/Atriz" class="btn btn-primary btn-rounded btn-icon" data-toggle="modal" data-target="#modalExemplo">
                                                    <i class="ti-plus"></i>
                                                </button>    


                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Poster:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="poster">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Imagem 01:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="img01">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Imagem 02:</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="img02">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Descrição:</label>
                                    <div class="col-sm-9">
                                        <textarea cols="25" rows="10" class="form-control" name="descricao"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <button class="btn btn-outline-primary btn-icon-text" name="submit" type="submit">
                                    <i class="ti-file btn-icon-prepend"></i>
                                    Enviar 
                                </button>

                                <button class="btn btn-outline-danger btn-icon-text" type="reset">
                                    <i class="ti-alert btn-icon-prepend"></i>
                                    Apagar
                                </button>
                            </center>
                        </div>

                </div>

            </div>

            </form>
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Ator</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="../inserir/inserirAtorModal.php" method="POST" >
                            <div class="modal-body">
                                Nome do Ator : <br><input class="form-control" name="ator"><br>
                                <button type="submit" class="btn btn-primary" >Cadastrar</button>
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Fechar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
rodape();
