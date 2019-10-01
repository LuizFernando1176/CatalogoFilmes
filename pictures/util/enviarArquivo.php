<?php
include_once '../util/corpo.php';
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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card text-center" >
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-12 col-xl-10">

                                <?php
                                if (isset($_FILES['arquivo']['name']) && ($_FILES['img01']['name']) && ($_FILES['img02']['name']) && $_FILES['arquivo']['error'] == 0) {
                                    echo '<div class="card-body">';
                                    echo 'Você enviou o arquivo: <strong>' . $_FILES['arquivo']['name'] . '</strong><br />';
                                    echo 'Este arquivo é do tipo: <strong > ' . $_FILES['arquivo']['type'] . ' </strong ><br />';
                                    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES['arquivo']['tmp_name'] . '</strong><br />';
                                    echo 'Seu tamanho é: <strong>' . $_FILES['arquivo']['size'] . '</strong> Bytes<br />';
                                    echo '<br />---------------------------------------------------------------------------------------<br />';
                                    echo 'Você enviou o arquivo: <strong>' . $_FILES['img01']['name'] . '</strong><br />';
                                    echo 'Este arquivo é do tipo: <strong > ' . $_FILES['img01']['type'] . ' </strong ><br />';
                                    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES['img01']['tmp_name'] . '</strong><br />';
                                    echo 'Seu tamanho é: <strong>' . $_FILES['img01']['size'] . '</strong> Bytes<br />';
                                    echo '<br />---------------------------------------------------------------------------------------<br />';
                                    echo 'Você enviou o arquivo: <strong>' . $_FILES['img02']['name'] . '</strong><br />';
                                    echo 'Este arquivo é do tipo: <strong > ' . $_FILES['img02']['type'] . ' </strong ><br />';
                                    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES['img02']['tmp_name'] . '</strong><br />';
                                    echo 'Seu tamanho é: <strong>' . $_FILES['img02']['size'] . '</strong> Bytes<br />';
                                    echo '<br />---------------------------------------------------------------------------------------<br />';

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


                                        
                                        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                                        echo '<br>';
                                        echo 'Arquivo salvo com sucesso em : <strong>' . $destino2 . '</strong><br />';
                                        echo '<br>';
                                        echo 'Arquivo salvo com sucesso em : <strong>' . $destino3 . '</strong><br />';
                                        echo '<br />---------------------------------------------------------------------------------------<br />';
                                        echo '<textarea cols="100%" readonly="" > ' . "http://localhost/catalogoFilmes/pictures/img/" . $caminho . '  </textarea>';
                                        echo '<br>';
                                        echo '<textarea cols="100%" readonly=""> ' . "http://localhost/catalogoFilmes/pictures/img/" . $caminho2 . '  </textarea>';
                                        echo '<br>';
                                        echo '<textarea cols="100%"readonly="" > ' . "http://localhost/catalogoFilmes/pictures/img/" . $caminho3 . '  </textarea>';
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