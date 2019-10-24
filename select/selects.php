<?php

include_once '../util/conectarBD.php';

function selectCategoria() {
    $coon = conectar();
    $queryBuscaCategoria = "select * from categoria ORDER BY categoria ASC";
    $queryResposta = mysqli_query($coon, $queryBuscaCategoria);
    echo '<select class="form-control" name="id_categoria"> <option  selected>Escolha sua Categoria</option>';
    while ($queryRespostas = mysqli_fetch_assoc($queryResposta)) {

        echo'<option value="' . utf8_encode($queryRespostas['id'] . '">' . $queryRespostas['categoria']) . '</option>
';
    }
    echo '</select>';
}
