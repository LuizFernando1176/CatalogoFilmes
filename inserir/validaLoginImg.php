<?php 
include_once '../util/conectarBD.php';// conecção com o banco de dados
$login = $_POST['login'];// login que vem via post do formulario de login
$senha = $_POST['senha'];// senha que vem via post do formulario de login
$coon = conectar();// função conectar com banco .
session_start();// primeiro passo para implementar , sessao no site vamos ver muito no decorrer dessas aulas .
$queryLogin = "SELECT `id`, `login`, `senha`,`idade` FROM `usuario` WHERE login like '$login' and senha like '$senha' "; // query responsavel pela comparação do usuario no banco caso , nao esteja no banco não deixa logar 
$select = mysqli_query($coon, $queryLogin); // query mais conecao para pode a função

if (mysqli_num_rows($select) > 0) { // funcao do php que conta as linha afetadas caso tenha alguma afetada ela gaurda os dados que seram usado na sessao 
    $resultados = mysqli_fetch_assoc($select);
    $login = $resultados['login'];
    $id = $resultados['id'];
    $idade = $resultados['idade'];
    $senha = $resultados['senha'];
    $usuarioLogadoParaSalvarNaSessao = '{
	  "idade":"' . $idade . '",
	  "login":"' . $login . '",
           "perfil":"' . $perfil . '"
	}';
    $_SESSION['gmUsuarioLogado'] = $usuarioLogadoParaSalvarNaSessao;
    $_SESSION ['login'] = $login;// exibir o nome do login do usuario da sessao ex : Luiz Fernando 
    $_SESSION ['idade'] = $idade;
    $_SESSION ['senha'] = $senha;
    $_SESSION ['id'] = $id;
    
    header('Location:../pictures/index.php'); // se tudo for verdade leva o usuario ate a index 
} else {
    echo $queryLogin;
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: ../pictures/login.php');// caso nao volta para o formulario 
}

?>
