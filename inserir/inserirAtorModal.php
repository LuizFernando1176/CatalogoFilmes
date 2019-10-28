<?php

include_once '../util/conectarBD.php';
$coon = conectar();
$ator = $_POST['ator'];

$queryInsereAtor ="INSERT INTO `ator`( `ator`) VALUES ('$ator')";
$respostaQueryAtor = mysqli_query($coon, $queryInsereAtor);


echo $queryInsereAtor;
if ($respostaQueryAtor) {

    echo 'Ator Adicionado com Sucesso !!';
    header('Location:../cadastros/cadastraFilme.php ');
} else {
    echo 'Erro ao adicionar Ator!!';
   header('Location:../cadastros/cadastraFilme.php ');
}
