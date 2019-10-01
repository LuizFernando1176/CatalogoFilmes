<?php
include_once 'corpo02.php';
//$urlSite=""; // implementar a variavel do site 
cabeca();
?>

<title> Sistema de Hopsedagem de imagem</title>
<div class="main-panel">
    <div class="container">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>

                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-xl-12 col-sm ">
                <div class="card text-center" >
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-9 col-xl-12 col-sm-12">

                                <?php
                                if (isset($_FILES['arquivo']['name']) && ($_FILES['img01']['name']) && ($_FILES['img02']['name']) && $_FILES['arquivo']['error'] == 0) {
                                    echo '<div class="card-body">';


                                    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                                    $arquivo_tmp2 = $_FILES['img01']['tmp_name'];
                                    $arquivo_tmp3 = $_FILES['img02']['tmp_name'];
                                    $nome = $_FILES['arquivo']['name'];
                                    $img01 = $_FILES['img01']['name'];
                                    $img02 = $_FILES['img02']['name'];

                                    // Pega a extensão
                                    $extensao = pathinfo($nome, PATHINFO_EXTENSION);
                                    $extensao2 = pathinfo($img01, PATHINFO_EXTENSION);
                                    $extensao3 = pathinfo($img02, PATHINFO_EXTENSION);

                                    // Converte a extensão para minúsculo
                                    $extensao = strtolower($extensao);
                                    $extensao2 = strtolower($extensao2);
                                    $extensao3 = strtolower($extensao3);


                                    // Cria um nome único para esta imagem
                                    // Evita que duplique as imagens no servidor.
                                    // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                                    $novoNome = uniqid('poster') . '.' . $extensao;
                                    $novoNome2 = uniqid('img01') . '.' . $extensao2;
                                    $novoNome3 = uniqid('img02') . '.' . $extensao3;

                                    // Concatena a pasta com o nome
                                    $destino = '../img/' . $novoNome;
                                    $destino2 = '../img/' . $novoNome2;
                                    $destino3 = '../img/' . $novoNome3;
                                    $caminho = $novoNome;
                                    $caminho2 = $novoNome2;
                                    $caminho3 = $novoNome3;

                                    if (move_uploaded_file($arquivo_tmp, $destino) && move_uploaded_file($arquivo_tmp2, $destino2) && move_uploaded_file($arquivo_tmp3, $destino3)) {



                                        echo '<p class="text-info text-capitalize " style="font-size: 18px ; font-family:Roboto ">Poster</p>';
                                        echo '<textarea cols="65" readonly="" > ' . "http://localhost/catalogoFilmes/pictures/img/" . $caminho . '   </textarea>';
                                        echo '<p class="text-info text-capitalize " style="font-size: 18px ; font-family:Roboto ">Imagem 01</p>';
                                        echo '<textarea cols="65" readonly=""> ' . "http://localhost/catalogoFilmes/pictures/img/" . $caminho2 . '  </textarea>';
                                        echo '<p class="text-info text-capitalize " style="font-size: 18px ; font-family:Roboto ">imagem 02</p>';
                                        echo '<textarea cols="65"readonly="" > ' . "http://localhost/catalogoFilmes/pictures/img/" . $caminho3 . '  </textarea>';
                                        echo '</div>';
                                    } else {

                                        echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
                                    }
                                }


                                echo '</div>';
                                echo '</div>';
                                ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div></div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<?php
rodape()?>