<?php

include_once 'conectarBD.php';
$coon = conectar();
$url = $_POST['url'];

$queryMudaURL = "UPDATE `urlsistema` SET `url`= '$url' ";
$respostaQuery = mysqli_query($coon, $queryMudaURL);



if ($respostaQuery) {

    echo 'Atualização foi um sucesso!!';
    header('Location:perfil.php');
} else {

    echo'Não Atualizou';
    
}