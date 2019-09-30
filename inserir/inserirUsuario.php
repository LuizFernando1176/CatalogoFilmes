<?php
include_once '../util/conectarBD.php';

$login = $_POST ['login'];//variavel post relacionada ao login que vai vim do formulario 
$senha = $_POST ['senha'];//variavel post relacionada a senha que vai vim do formulario 
$idade = $_POST ['idade'];//variavel post relacionada a idade que vai vim do formulario 

//query responsavel pela insercao dos dados no banco 
$queryAdicionaFilme = "INSERT INTO `usuario`( `login`, `senha`, `idade`) VALUES ('$login','$senha','$idade')";
//objeto variavelpara coneccao 
$coon = conectar();
//realizando a adicao
$resultado = mysqli_query($coon, $queryAdicionaFilme);

// condiçao para adicao 

if($resultado){
    
    echo 'Usuario cadastrado'; // se de certo entra neste echo 
    
} else {
    
    echo 'Usuario não cadsatrado';// caso nao entrei neste 
}
;

