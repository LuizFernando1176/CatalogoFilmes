<?php
include_once 'conectarBD.php';
# Estabelece a conecção com banco 
$coon = conectar();
# Faz a Busca que vai no completar
$query ="SELECT id, ator from ator WHERE ator LIKE '%% %%' ORDER BY ator DESC LIMIT 10";
$arr = array();
$rs = mysqli_query($coon,$query);
# Pega a coleção de resultados
while($obj = mysqli_fetch_object($rs)) {
    $arr[] = $obj;
}
# Transforma em um json
$json_response = json_encode($arr);
# escreva a resposta
echo $json_response;

?>
