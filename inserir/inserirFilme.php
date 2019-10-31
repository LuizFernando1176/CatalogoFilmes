<?php

include_once '../util/conectarBD.php';
$coon = conectar();
$nome_filme = $_POST['nome_filme'];
$nome_original = $_POST['nome_original'];
$imdb = $_POST['imdb'];
$id_categoria = $_POST['id_categoria'];
$classificacao = $_POST ['classificacao'];
$descricao = ['descricao'];
$poster = ['poster'];
$img01 = ['img01'];
$img02 = ['img02'];
$ator = ['ator'];
$lancamento = ['lancamento'];
if(isset($_POST['submit'])){
    // Get selected skills
    $ator = $_POST['ator'];
    
    // Convert skills ids string to array
    $ator_arr = explode(',', $ator);
}
$queryAdicionaFilme = "INSERT INTO `filme`( `nome_filme`, `nome_original`, `imdb`, `id_categoria`, `classificacao`, `descricao`, `poster`, `img01`, `img02`, `ator`, `lancamento`) VALUES ('$nome_filme','$nome_original,'$imdb','$id_categoria',$classificacao,'$descricao','$poster','$img01','$img02','$ator','$lancamento')";
$queryResposta = mysqli_query($coon, $queryAdicionaFilme);
echo $queryAdicionaFilme;

if (mysqli_num_rows($queryResposta > 0)) {

    echo 'Filme Adicionado com Sucesso !!';
//    header('Location:../cadastros/cadastraFilme.php ');
} else {
    echo 'Erro ao adicionar Filme !!';

}
