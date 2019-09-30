<?php
include_once 'util/corpo.php';
cabeca();
?>

<form method="post" enctype="multipart/form-data" action="util/enviarArquivo.php">
    Selecione uma imagem: <input name="arquivo" type="file" class="form-control-file" />
   <br />
   <input type="submit" value="Salvar" />
</form>

<?php
rodape();
?>