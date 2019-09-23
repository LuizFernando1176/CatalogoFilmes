<?php
// Inicializa a sessão.
session_start();// 
session_destroy();// destroi a sessao
unset($_SESSION);//des seta a sessao 
echo' <SCRIPT Language="javascript">
location.href="./login.php";
</SCRIPT>';// manda para pagina de login 
?>